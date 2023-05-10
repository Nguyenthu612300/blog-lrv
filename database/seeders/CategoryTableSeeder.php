<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $limit=10;
        // for($i=0; $i<$limit; $i++){
        //     DB::table('categories')->insert([   
        //         'title'=>Str::random(15),
        //         'is_active'=>false
        //     ]);
        // }
        Category::factory()
        ->count(10)
        ->create();
    }
}
