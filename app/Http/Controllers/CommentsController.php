<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    private static function comments() {
            $comments = [];
            for ($i=0;$i<count(Comment::all());$i++) {
                $comment = Comment::all()[$i];
                $comments[$i] = [
                    'id' => $comment['id'],
                    'userId' => $comment['user_id'],
                    'content' => $comment['content'],
                ];
            }
            return $comments;
    }
    public function index () {
        return self::comments();
    }


    public function store(Request $request){}

    public function show($id)
    {
        $comments = self::comments();
        $index = array_search($id,array_column($comments, 'id'));
        $comment = $comments[$index];
        if ($id <= count($comments) && $id > 0) {
            return $comment;
        }else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
