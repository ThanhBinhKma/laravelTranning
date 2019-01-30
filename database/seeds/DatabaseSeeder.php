<?php

use App\BlogNews;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for ($i = 1; $i < 100; $i++) {
            $data[] = [
                'Title' =>str_random( 10 ),
                'Content' =>str_random( 10 ),
                'Author' =>str_random( 10 ),
                'Like' =>mt_rand(1,1000),
                'View' =>mt_rand(1,1000)
            ];
        }

        BlogNews::insert( $data );
    }
}

