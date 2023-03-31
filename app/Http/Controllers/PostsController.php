<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    private function getData() {
            return Post::all();
    }
    public function index () {
        return self::getData();
    }


    public function store(Request $request){}

    public function show($id)
    {
        $posts = self::getData();
        $index = array_search($id,array_column([$posts], 'id'));
        $post = $posts[$index];
        if ($id <= count($posts) && $id > 0) {
            return $post;
        }else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
