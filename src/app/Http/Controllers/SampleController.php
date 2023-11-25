<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SampleService;

class SampleController extends Controller
{

    public function index()
    {
        return view('sample');
    }

    public function processCheckbox(Request $request, SampleService $sampleService)
    {
        // サービスクラスのメソッドを呼び出し
        $checkboxValues = $sampleService->processCheckboxValues($request);

        // 結果確認
        dd($checkboxValues);
    }
}
