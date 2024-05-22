<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $smartphones = [
            [
                'image' => 'images/Apple1.jpeg',
                'brand_name' => 'Apple',
                'description' => 'iPhone 13 Pro with A15 Bionic chip and Super Retina XDR display',
                'price' => '99999',
            ],
            [
                'image' => 'images/Samsung.jpeg',
                'brand_name' => 'Samsung',
                'description' => 'Samsung Galaxy S21 Ultra with Exynos 2100 and Dynamic AMOLED 2X display',
                'price' => '84999',
            ],
            [
                'image' => 'images/Google Pixel 8a.jpeg',
                'brand_name' => 'Google',
                'description' => 'Google Pixel 6 with Google Tensor chip and 90Hz Smooth Display',
                'price' => '64999',
            ],
            [
                'image' => 'images/OnePlus.jpeg',
                'brand_name' => 'OnePlus',
                'description' => 'OnePlus 9 Pro with Snapdragon 888 and Fluid AMOLED display',
                'price' => '72999',
            ],
            [
                'image' => 'images/MI.jpeg',
                'brand_name' => 'Xiaomi',
                'description' => 'Xiaomi Mi 11 with Snapdragon 888 and AMOLED DotDisplay',
                'price' => '74999',
            ],
            [
                'image' => 'images/Sony Xperia 1 Mk II.jpeg',
                'brand_name' => 'Sony',
                'description' => 'Sony Xperia 1 III with Snapdragon 888 and 4K HDR OLED display',
                'price' => '129999',
            ],
            [
                'image' => 'images/Oppo.jpeg',
                'brand_name' => 'Oppo',
                'description' => 'Oppo Find X3 Pro with Snapdragon 888 and Billion Colour Display',
                'price' => '84999',
            ],
            [
                'image' => 'images/Huawei.jpeg',
                'brand_name' => 'Huawei',
                'description' => 'Huawei P50 Pro with Kirin 9000 and OLED FullView display',
                'price' => '89999',
            ],
            [
                'image' => 'images/ROG.jpeg',
                'brand_name' => 'Asus',
                'description' => 'Asus ROG Phone 5 with Snapdragon 888 and AMOLED HDR display',
                'price' => '79999',
            ],
            [
                'image' => 'images/RealMe.jpeg',
                'brand_name' => 'Realme',
                'description' => 'Realme GT with Snapdragon 888 and Super AMOLED display',
                'price' => '38999',
            ],
            [
                'image' => 'images/Motorola.jpeg',
                'brand_name' => 'Motorola',
                'description' => 'Motorola Edge 20 Pro with Snapdragon 870 and OLED display',
                'price' => '49999',
            ],
        ];

        foreach ($smartphones as $smartphone) {
            DB::table('smartphones')->insert($smartphone);
        }
    }
}
