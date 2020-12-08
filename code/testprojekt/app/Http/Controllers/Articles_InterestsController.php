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


    // public function create($neuerTitel, $neuerText, $neueInterest_id) {

    //     $article = new Article;
    //     $article->title = $neuerTitel;
    //     $article->text = $neuerText;
    //     $article->interest_id = $neueInterest_id;
    //     $article->save();
    // }

    public function create() {

        return view('create_new_article');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => [
                'required', 
                function($attribute, $value, $fail) {
                    if(strpos($value, 'Laravel') === false)
                    {
                        $fail($attribute . ' enthält nicht Laravel');
                    }
                }
            ],
            'text' => 'required',
        ]);

        $article = new Article;
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->interest_id = $_POST['interest_id'];
        $article->save();
        return redirect('articles');

    }


    public function destroy($id) {
        Article::destroy($id);
        return "Artikel mit der ID = $id gelöscht";
    }

    // public function update($id, $neuerTitel, $neuerText, $neueInterest_id) {
    //     $article = Article::whereId($id)->first();
    //     $article->title = $neuerTitel;
    //     $article->text = $neuerText;
    //     $article->interest_id = $neueInterest_id;
    //     $article->save();
    //     return "Artikel mit der ID = $id geändert";
    // }


    public function showUpdate($id) {
        $article = Article::whereId($id)->first();
       
        return view('update_article', compact('article'));

    }

    public function storeUpdate() {
        $article = Article::whereId($_POST['id'])->first();
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->interest_id = intval($_POST['interest_id']);
        $article->save();
        return redirect("/articles/{$_POST['id']}");

    }
}

