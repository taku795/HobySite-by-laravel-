<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\Content;

class HobyController extends Controller
{
    /** 
     * ホーム画面を表示
     * 
     * @return view
     * */ 
    public function showHome() {
        //全コンテンツを取得
        $content=Content::all();

        //クッキーがあればクッキーからユーザーIDの取得
        //無ければゲストユーザー
        if (isset($_COOKIE['user_id'])) {
            $user_id=$_COOKIE['user_id'];
        } else {
            $user_id=null;
        }
        //IDをもとにユーザー情報をDBから取得
        if($user_id!=null) {
            $user=User::where('user_id', $user_id)->first();
        } else {
            $user='gestuser';
        }

        return view('hoby.home',
        [
            'content'=>$content,
            'user'=>$user
        ]);
    }

    /** 
     * ログイン画面を表示
     * 
     * @return view
     * */ 
    public function showLoginPage() {
        return view('hoby.login-page');
    }
    /** 
     * ログイン処理
     * 
     * @return view
     * */ 
    public function Login() {
        return view('hoby.login-page');
    }
    /** 
     * 新規登録画面を表示
     * 
     * @return view
     * */ 
    public function showNewUserPage() {
        return view('hoby.newuser');
    }
    /** 
     * 新規登録処理
     * 
     * @return view
     * */ 
    public function setNewUser() {
        return view('hoby.newuser');
    }
}
