<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class ModelTestController extends Controller
{
    public function index() {
        // アクセサでteam_nameに説明文を追加
        // 呼び出す際にはgetAaaBbbAttribute()の「AaaBbb」をスネークケースに変換
        // dd(Team::first()->team_name_add_description); 


        // 既存のプロパティを変更
        // dd(Team::first()->team_name);


        // ミューテータで登録時に加工
        // $team = new Team();
        // $team->team_name_add_description = "登録チーム";
        // $team->save();

        // 既存のプロパティを変更(ミューテータ)
        $team = new Team();
        $team->team_name = "登録チーム";
        $team->save();

        dd($team);
    }
}
