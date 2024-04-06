<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;

class UserController extends Controller
{
    public function index(Recruitment $recruitment)
    {
        return view('users.index')->with(['users' => $user->getByLimit()]);
    }
    
    public function show(Recruitment $recruitment)
    {
        return view('users.show')->with(['users' => $user]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function apply(Request $request, $recruitmentId)
    {
        // ユーザーがログインしているかどうかを確認
        if (!Auth::check()) {
        return redirect()->route('login')->with('error', '応募するにはログインしてください。');
        }

        // ログインユーザーのIDを取得
        $userId = Auth::id();

        // 応募情報を保存
        $application = new Application();
        $application->user_id = $userId;
        $application->recruitment_id = $recruitmentId;
        $application->save();

        return redirect()->back()->with('success', '応募が完了しました。');
    }
}
?>