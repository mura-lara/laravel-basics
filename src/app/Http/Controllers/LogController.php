<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    public function index()
    {
        // ファサード
        // Log::emergency("emergency ファサードでログ出力確認");
        // Log::alert("alert ファサードでログ出力確認");
        // Log::critical("critical ファサードでログ出力確認");
        // Log::error("error ファサードでログ出力確認");
        // Log::warning("warning ファサードでログ出力確認");
        // Log::notice("notice ファサードでログ出力確認");
        // Log::info("info ファサードでログ出力確認");
        // Log::debug("debug ファサードでログ出力確認");

        // // ヘルパ
        // logger()->emergency("emergency ヘルパでログ出力確認");
        // logger()->alert("alert ヘルパでログ出力確認");
        // logger()->critical("critical ヘルパでログ出力確認");
        // logger()->error("error ヘルパでログ出力確認");
        // logger()->warning("warning ヘルパでログ出力確認");
        // logger()->notice("notice ヘルパでログ出力確認");
        // logger()->info("info ヘルパでログ出力確認");
        // logger()->debug("debug ヘルパでログ出力確認");


        Log::emergency("emergency チャンネル設定ログ出力確認");
        Log::alert("alert チャンネル設定ログ出力確認");
        Log::critical("critical チャンネル設定ログ出力確認");
        Log::error("error チャンネル設定ログ出力確認");
        Log::warning("warning チャンネル設定ログ出力確認");
        Log::notice("notice チャンネル設定ログ出力確認");
        Log::info("info チャンネル設定ログ出力確認");
        Log::debug("debug チャンネル設定ログ出力確認");
    }
}
