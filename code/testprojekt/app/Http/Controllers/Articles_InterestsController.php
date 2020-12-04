<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class Articles_InterestsController extends Controller
{
    public function show($id = null) {

        if (!$id) {

            // $articles =  Article::get(); // ist äquivalent zu ::all()
            $articles =  Article::all();
            // $singleArticleByIdText = Article::whereId('8')->first()->text;


            return dd($articles);
            // return dd($singleArticleByIdText);
        }

        else {
            $article = Article::whereId($id)->first();
            return dd($article);
        }
    }

    public function ShowOnlyTrash() {

        $articles =  Article::onlyTrashed()->get();
        return dd($articles);

    }

    public function ShowWithTrash() {

        $articles =  Article::withTrashed()->get();
        return dd($articles);

    }


    public function create($neuerTitel, $neuerText, $neueInterest_id) {

        $article = new Article;
        $article->title = $neuerTitel;
        $article->text = $neuerText;
        $article->interest_id = $neueInterest_id;
        $article->save();
    }

    public function destroy($id) {
        Article::destroy($id);
        return "Artikel mit der ID = $id gelöscht";
    }

    public function update($id, $neuerTitel, $neuerText, $neueInterest_id) {
        $article = Article::whereId($id)->first();
        $article->title = $neuerTitel;
        $article->text = $neuerText;
        $article->interest_id = $neueInterest_id;
        $article->save();
        return "Artikel mit der ID = $id geändert";
    }

}
