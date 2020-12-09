<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Article;



class Articleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => Str::random(10),
            'text' => Str::random(50),
        ]);
        
        // $article = new Article;
        // $article->title = Str::random(10);
        // $article->text = Str::random(10);
        // $article->save();
    }
}
