<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'MIPHONE',
            'price'=>'11500',
            'category'=>'Phone',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/samsung-galaxy-a51-5g-db-529x800-1586411461.jpg',
            'decription'=>'4Gb SmatPhone'
            ],
            [
                'name'=>'LGPhone',
            'price'=>'11500',
            'category'=>'Phone',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/sm-f127gzkgins/gallery/in-galaxy-f12-4gb-ram-sm-f127gzkgins-419015713?$684_547_PNG$',
            'decription'=>'4Gb SmatPhone'
            ],
            [
                'name'=>'ASUSPhone',
            'price'=>'14500',
            'category'=>'Phone',
            'gallery'=>'https://images.samsung.com/is/image/samsung/in-galaxy-m51-m515fz-6gb-sm-m515fzbdins--301211700?scl=1&fmt=png-alpha',
            'decription'=>'4Gb SmatPhone'
            ]
        ]);
    }
}
