<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use App\Models\User;
use App\Http\Requests\RecruitmentRequest;
use Auth;

class PostController extends Controller
{
    public function index(Recruitment $recruitments, User $user,Request $request)
    {
        $keyword = $request->input("major");
        $query = Recruitment::query();

        if($keyword != null) {
            $query->where('major_id', '=', $keyword);
        }

        $recruitments = $query->get();
        return view('kunion.index', compact('recruitments', 'keyword'));  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        return view('kunion.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create()
    {
        return view('kunion.create');
    }
    
    public function store(RecruitmentRequest $request, Recruitment $recruitment)
    {
        $input['detail'] = $request['detail'];
        $input['user_id'] = Auth::id();
        $input['major_id'] = $request['major'];
        $recruitment->fill($input)->save();
        return redirect("/index");
    }
    
    
}
?>