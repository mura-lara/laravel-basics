<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class ModelTestController extends Controller
{
    public function index() {
        // アクセサでteam_nameに説明文を追加
        // 呼び出す際にはgetAaaBbbAttribute()の「AaaBbb」をスネークケースに変換
        // dd(Team::first()->teamName_add_description); 


        // 既存のプロパティを変更
        dd(Team::first()->team_name); 
    }
}
