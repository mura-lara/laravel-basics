<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleRequestController extends Controller
{
    public function index()
    {
        return view('request');
    }

    public function store(Request $request)
    {

        // トークンも含めて全て取得
        // $data = $request->all();

        // トークン以外を取得

        // onlyをつかう場合は、指定のもののみ取得
        // $data = $request->only('name', 'address', 'mail');

        // except 除外するものを指定
        $data = $request->except('_token');
        
        return view('request', ['data' => $data]);
    }

}
