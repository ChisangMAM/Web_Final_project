<?php

use Illuminate\Database\Seeder;

class Productseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'pocket cotton sweatshirt',
            'quantity' => '1',
            'description' => 'Great for winter, soft cotton make you feel comfortable',
            'price' => '5.6',
            'image' => 'https://image.uniqlo.com/UQ/ST3/WesternCommon/imagesgoods/409171/item/goods_69_409171.jpg' 
            ]);

        DB::table('products')->insert([
            'product_name' => 'Crocodie T-shirt',
            'quantity' => '1',
            'description' => 'Look cool for man',
            'price' => '7.8',
            'image' => 'https://www.lacoste.com/on/demandware.static/-/Library-Sites-LacosteNAContent/default/dw21327564/imgs/polo-shop/main/latest/poloshop-main-latest-2.jpg' 
            ]);
    }
}
