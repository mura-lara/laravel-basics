<?php

namespace App\Services;

class SampleService
{
    public function processCheckboxValues($request)
    {
        $checkboxValues = [];

        // チェックボックスの名前をキーとしてフォームからの入力を取得
        $checkboxNames = ['check1', 'check2', 'check3'];

        foreach ($checkboxNames as $checkboxName) {
            // チェックボックスがチェックされていれば、連想配列に値を追加
            if ($request->has($checkboxName)) {
                $checkboxValues[$checkboxName] = $request->input($checkboxName);
            }
        }

        return $checkboxValues;
    }
}
