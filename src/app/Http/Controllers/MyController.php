<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        $msg = 'hello';

        // newでインスタンス作成
        $myService = new \App\Services\MyService();
        $msg = $myService->toUpperCase($msg);


        $data = [
            'msg' => $msg
        ];


        return view('service', $data);
    }
}