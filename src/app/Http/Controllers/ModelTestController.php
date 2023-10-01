<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class ModelTestController extends Controller
{
    public function index() {
        // カスタムコレクションでフィールド名を取得するメソッドを追加したので使う
        dd(Team::get()->fields()); 
    }
}
