<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigSampleController extends Controller
{
    public function index() {

        $data = [
            'config_message'    => config('sample.message'),
            'config_flag'       => config('sample.flag'), 
            'config_num'        => config('sample.num'), 
            'config_array'      => config('sample.array'), 
            'config_env'        => config('sample.env'), 
        ];

        dd($data);
        return;
    }
}
