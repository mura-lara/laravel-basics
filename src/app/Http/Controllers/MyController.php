<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyService;

class MyController extends Controller
{

    protected $myService;

    // メソッド単位でインスタンス作成
    public function index(MyService $myService)
    {
        $msg = 'hello';

        $msg = $myService->toUpperCase($msg);

        $data = [
            'msg' => $msg
        ];


        return view('service', $data);
    }
}