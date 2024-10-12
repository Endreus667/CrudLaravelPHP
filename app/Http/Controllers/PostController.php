<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function create(Request $resquest) {
        $new_post = [
         'title' => 'crud one',
         'content' => 'Conteudo qualquer',
         'author' => 'end'
        ];

        $post = new Post();

        $post->title = 'Post one';
        $post->content = 'conteudo qualquer';
        $post->author = 'end1';
        $post->save();
        dd($post);
    }

    public function read(Request $r) {
        $post = new Post();

        $post = $post->find(2);

        dd($post);
    }

    public function all(Request $r) {

        $posts = Post::all();



        return $posts;

    }

    public function update(Request $r) {

        $posts = Post::where('id','>', 1)->update( [
            'author' => 'end',
            'title' => 'alterado'
        ]);



        return $posts;
    }
}
