<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Util;

class UtilController extends Controller
{
    public function index(Util $util)
    {

        // $result = $util->isInputValid(null); // false
        $result = $util->isInputValid(''); // false
        $result = $util->isInputValid([]); // false
        $result = $util->isInputValid(0); // true
        $result = $util->isInputValid('テキスト'); // true
        $result = $util->isInputValid(['a', 'b', 'c']); // true

        dd($result);

    }
}
