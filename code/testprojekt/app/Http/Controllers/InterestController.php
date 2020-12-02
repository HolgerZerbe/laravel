<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class InterestController extends Controller
{
    public function index() {
        $interests = DB::select('select * from interests');
        return dd($interests);

    }

    public function showPosts() {
        $posts = DB::table('posts')->get();
        return dd($posts);

    }

    public function countPosts() {
        $posts = DB::table('posts')->get()->count();
        return dd($posts);
        ;

    }

    public function createPost($title, $text, $interest_id) {

        if ($text === 'null') {$text = null;}
        if ($interest_id === 'null') {$interest_id = null;}

        DB::table('posts')->insert(['title'=> $title, 'text' => $text, 'interest_id'=> $interest_id, 'created_at' => \Carbon\Carbon::now(),'updated_at' => \Carbon\Carbon::now()]);
        return 'Post wurde gespeichert';

    }
    public function updatePost6to10() {

        DB::table('posts')->whereBetween('id', [ 6, 10])->whereNull('interest_id')->update(['text' => 'neuer Text', 'updated_at' => \Carbon\Carbon::now()]);
        return 'Posts wurden upgedatet';

    }

    public function showPostById($id) {

        $singlePost = DB::table('posts')->select('created_at')->where('id', $id)->first();
        return dd($singlePost);

    }

    public function showPostsDescending() {

        $descendingPosts = DB::table('posts')->whereNotNull(['text', 'interest_id'])->orderBy('id', 'desc')->get();
        return dd($descendingPosts);

    }

    public function deleteNullPosts() {
        DB::table('posts')->whereNull('text')->orWhereNull('interest_id')->delete();
        return 'Posts mit Null in text oder interest_id gelöscht';
    }

    public function fullfillData() {

        $interestdata = [
            [
            'id' => 1,
            'text' => 'Coding',
            ],
            [
            'id' => 2,
            'text' => 'Kochen',
            ],
            [
            'id' => 3,
            'text' => 'Singen',
            ],
            [
            'id' => 4,
            'text' => 'Fußball',
            ],
            ];
            
            foreach ($interestdata as $interest) {
                $interest = (object) $interest;
                DB::table('interests')->insert(
                    ['text' => $interest->text, 'id' => $interest->id]
                );
            }
            
            $postdata = [
            [
            'id' => 1,
            'title' => 'Montag',
            'text' => 'Montag ist schön zum Fußball spielen',
            'interest_id' => 4,
            ],
            [
            'id' => 2,
            'title' => 'jeder Tag',
            'text' => null,
            'interest_id' => 1,
            ],
            [
            'id' => 3,
            'title' => 'Dienstag',
            'text' => 'Dienstag koche ich.',
            'interest_id' => 2,
            ],
            [
            'id' => 4,
            'title' => 'Mittwoch',
            'text' => 'Mittwoch singe ich',
            'interest_id' => 3,
            ],
            [
            'id' => 5,
            'title' => 'Mittwoch',
            'text' => 'Mittwoch ist schlechtes Wetter',
            'interest_id' => null,
            ],
            [
            'id' => 6,
            'title' => 'Donnerstag',
            'text' => 'Donnerstag lerne ich den Query Builder',
            'interest_id' => 1,
            ],
            [
            'id' => 7,
            'title' => 'Essen',
            'text' => 'Ich bin hungrig.',
            'interest_id' => null,
            ],
            [
            'id' => 8,
            'title' => 'Freitag',
            'text' => null,
            'interest_id' => 1,
            ],
            [
            'id' => 9,
            'title' => 'Samstag',
            'text' => 'Samstag koche ich.',
            'interest_id' => 2,
            ],
            [
            'id' => 10,
            'title' => 'Fußball',
            'text' => null,
            'interest_id' => 4,
            ],
            [
            'id' => 11,
            'title' => 'Coding',
            'text' => 'Laravel macht Spaß',
            'interest_id' => null,
            ],
            ];
            
            foreach ($postdata as $post) {
                $post = (object) $post;
            
                DB::table('posts')->insert(
                    [
                'id' => $post->id,
                'title' => $post->title,
                'text' => $post->text,
                'interest_id' => $post->interest_id,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
                );
            }

    }

    public function create($id, $text) {
        DB::insert('insert into interests (id, text) values (:id, :text)', ['id' => $id, 'text' => $text]);
    }
    public function delete($id) {
        $removed = DB::delete('delete from interests where id = ?', [$id]);
        return var_dump($removed);

    }
}
