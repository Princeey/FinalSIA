<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphones List PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        hr {
            border-top: 2px solid #007bff;
            width: 80%;
            margin: 20px auto;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        img {
            display: block;
            margin: auto;
            max-width: 50px;
            max-height: 50px;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Smartphones</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>QR Code</th>
                <th>Brand Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smartphones as $smartphone)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($smartphone->id)) }}" alt="QR Code"></td>
                    <td>{{ $smartphone->brand_name }}</td>             
                    <td>{{ $smartphone->description }}</td>
                    <td>{{ $smartphone->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
