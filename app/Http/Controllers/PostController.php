<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;

class PostController extends Controller
{
    public function index(Recruitment $recruitment)
    {
        return view('users.index')->with(['users' => $post->getByLimit()]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create()
    {
        return view('kunion.create');
    }
}
?>