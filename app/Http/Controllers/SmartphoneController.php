<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use Barryvdh\DomPDF\Facade\Pdf;

class SmartphoneController extends Controller 
{   
    public function index() {
        $smartphones = Smartphone::orderBy('id')->get(); 
        return view('smartphone', compact('smartphones')); 
    }

    public function generateCSV() {
        $smartphones = Smartphone::orderBy('id')->get(); 

        $filename = 'smartphones.csv';

        $file = fopen('php://temp', 'w+');

        fputcsv($file, ['ID', 'Brand Name', 'Description', 'Price']);

        foreach($smartphones as $smartphone) {
            fputcsv($file, [
                $smartphone->id,
                $smartphone->brand_name,
                $smartphone->description,
                $smartphone->price,
            ]);
        }

        rewind($file);

        $response = response(stream_get_contents($file), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);

        fclose($file);

        return $response;
    }

    public function pdf(){
        $smartphones = Smartphone::orderBy('brand_name')->get(); 
        $pdf = Pdf::loadView('smartphone-list', compact('smartphones'));

        return $pdf->download('smartphone-list.pdf');
    }


    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
    
        $file = $request->file('csv_file');
    
        
        $csvData = array_map('str_getcsv', file($file->getPathname()));
    
        $headersSkipped = false;
    
        foreach ($csvData as $row) {
            
            if (!$headersSkipped) {
                $headersSkipped = true;
                continue;
            }
    
            $brand_name = $row[0];
            $description = $row[1];
            $price = $row[2];
    
            if (is_numeric($price)) {
                Smartphone::create([ 
                    'brand_name' => $brand_name,
                    'description' => $description,
                    'price' => $price,
                ]);
            } else {
                error_log("Invalid price value for row: " . implode(', ', $row));
            }
        }
    
        return redirect()->route('smartphone')->with('success', 'Smartphones imported successfully.');
    }
    
}
