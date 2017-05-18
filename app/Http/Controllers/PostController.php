<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;

class PostsController extends Controller {

    public function store() {
        Comment::create(array(
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ));

        return Response::json(array('success' => true));
    }

    public function responses(Message $message) {
        return $message->responses;
    }
}
