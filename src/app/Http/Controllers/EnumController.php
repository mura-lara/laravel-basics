<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enums\Role;

class EnumController extends Controller
{
    public function index() {

        // Enumのクラス名→case変数名→valueまたはメソッド()
        // dd(Role::ADMIN->value); // 1
        // dd(Role::ADMIN->label()); // 管理者

        // 値から取得したい場合
        dd(Role::from(1)->label()); // 管理者
    }
}
