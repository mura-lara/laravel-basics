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
        // dd($request);

        $data = [
            'text' => $request->input('text')
        ];

        return view('request', $data);
    }

}
