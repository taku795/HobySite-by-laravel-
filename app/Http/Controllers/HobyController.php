<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $content=Content::all();
        
        return view('hoby.home',
        [
            'content'=>$content
        ]);
    }
}
