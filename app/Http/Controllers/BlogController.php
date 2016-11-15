<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\View;

use App\Post;

use Request;

class BlogController extends Controller
{
    /**
     * Posts
     *
     * @return void
     */
    public function showPosts()
    {
        $posts = Post::paginate(5);
        if (Request::ajax()) {
            $msg="I'm in";
            return Response::json(View::make('posts', array('posts' => $posts, 'msg' => $msg))->render());
        }

        return View::make('blog', array('posts' => $posts));
    }
}
