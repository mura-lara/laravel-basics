<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Util;

class UtilController extends Controller
{
    protected $util;

    public function __construct(Util $util)
    {
        $this->util = $util;
    }

    public function index()
    {
        // $result = $util->isInputValid(null); // false
        // $result = $util->isInputValid(''); // false
        // $result = $util->isInputValid([]); // false
        // $result = $util->isInputValid(0); // true
        // $result = $util->isInputValid('テキスト'); // true
        // $result = $util->isInputValid(['a', 'b', 'c']); // true
        
        $result = $this->util->isInputValid(null); // false
        $result = $this->util->isInputValid(''); // false
        $result = $this->util->isInputValid([]); // false
        $result = $this->util->isInputValid(0); // true
        $result = $this->util->isInputValid('テキスト'); // true
        $result = $this->util->isInputValid(['a', 'b', 'c']); // true

        dd($result);

    }
}
