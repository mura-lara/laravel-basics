<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyService;

class MyController extends Controller
{

    protected $myService;

    // コンストラクタでインスタンス作成
    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    public function index()
    {
        $msg = 'hello';

        $msg = $this->myService->toUpperCase($msg);

        $data = [
            'msg' => $msg
        ];

        return view('service', $data);
    }
}