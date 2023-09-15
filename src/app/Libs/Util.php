<?php

namespace App\Libs;

/* 
 * Libs 共通クラス 
 * Util ビジネスロジックに関係ない処理
 * 
 */
class Util
{
    /*
     * nullまたは空文字、空配列の場合はfalseを返す
     * 
     * @param   mixed   $input
     * @return  bool
     */
    function isInputValid($input) {
       
        if (is_null($input) || $input === '' || (is_array($input) && empty($input))) {
            return false;
        } else {
            return true;
        }
    }
    
}