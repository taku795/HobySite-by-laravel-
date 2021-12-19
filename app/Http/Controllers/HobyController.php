<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobyController extends Controller
{
    /** 
     * ホーム画面を表示
     * 
     * @return view
     * */ 
    public function showHome() {
        return view('hoby.home');
    }
}
