<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostTableSeeder extends Seeder
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
        //     DB::table('posts')->insert([   
        //         'title'=>Str::random(15),
        //         'is_active'=>true,
        //         'slide_url'=>Str::random(15),
        //         'content'=>Str::random(15),
        //         'category_id'=> 4
        //     ]);
        // }
        Post::factory()
        ->count(10)
        ->create();
    }
}
