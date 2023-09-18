<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class ValidateController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(StorePostRequest $request)
    {
        dd($request);

    }
}
