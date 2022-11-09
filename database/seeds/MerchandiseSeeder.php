<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'brand_name'=>'Bear Brand',
                'product_name'=>'Bear Brand Milk Swak 33g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'56',
                'unit_id'=>'3',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Head & Shoulders',
                'product_name'=>'Head & Shoulders Shampoo 12ml',
                'retail_price'=>'70.00',
                'wholesale_price'=>'7.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'43',
                'unit_id'=>'1',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Safeguard',
                'product_name'=>'Safeguard Bar Soap Pure White 85g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'3'
            ],
            [
                'brand_name'=>'Bioderm',
                'product_name'=>'Bioderm Soap Pristine White 60g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'3'
            ],
            [
                'brand_name'=>'Palmolive',
                'product_name'=>'Palmolive Shampoo 12ml',
                'retail_price'=>'71.00',
                'wholesale_price'=>'7.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'1',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Birch Tree',
                'product_name'=>'Birch Tree Milk 33g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'11.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'35',
                'unit_id'=>'3',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Alaska',
                'product_name'=>'Alaska Fortified Powdered Milk Drink Swak 33g',
                'retail_price'=>'80.00',
                'wholesale_price'=>'11.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'35',
                'unit_id'=>'3',
                'category_id'=>'1'
            ],
            
        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
