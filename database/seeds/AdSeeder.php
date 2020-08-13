<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Ad;
class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::create(
            ['desc' => 'Good Auto without trubles',
                'price' => '1000'  ,
                'category_id'=>1
            ]
        );
        Ad::create(
            ['desc' => 'Good Moto without trubles',
                'price' => '400'  ,
                'category_id'=>2
            ]
        );
        Ad::create(
            ['desc' => 'Good Comp without trubles',
                'price' => '100'  ,
                'category_id'=>3
            ]
        );
        Ad::create(
            ['desc' => 'Good Audio without trubles',
                'price' => '10'  ,
                'category_id'=>4
            ]
        );
    }
}
