<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Team extends Model
{
    use HasFactory;

    // 値を代入したくない項目リスト
    protected  $guarded = [
        'id'
    ];

    // バリデーション情報リスト
    public static $rules = [
        'team_name' => 'required'
    ];

    // カスタムコレクションを使う
    public function newCollection(array $models = [])
    {
        return new CustomCollection($models);
    }

    // アクセサ
    public function getTeamNameAddDescriptionAttribute(){
        return 'アクセサで付与された説明：' . $this->team_name;
    }

    // アクセサ(既存のプロパティを変更)
    public function getTeamNameAttribute($value) {
        return "アクセサで既存のプロパティを変更：" . $value;
    }

    // ミューテータ
    public function setTeamNameAddDescriptionAttribute($value) {
        return $this->attributes['team_name'] = 'ミューテータで付与された説明：' . $value;
    }
    
    // ミューテータ(既存のプロパティを変更)
    public function setTeamNameAttribute($value) {
        return $this->attributes['team_name'] = 'ミューテータで既存プロパティを変更：' . $value;
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