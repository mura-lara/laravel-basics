<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Team extends Model
{
    use HasFactory;

    // カスタムコレクションを使う
    public function newCollection(array $models = [])
    {
        return new CustomCollection($models);
    }
}

// カスタムコレクション
class CustomCollection extends Collection
{
    // フィールドを取得するメソッド
    public function fields()
    {
        $item = $this->first();
        return array_keys($item->toArray());
    }
}