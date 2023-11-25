<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
    public function compose(View $view)
    {
        // Category モデルの仮データを生成
        $categories = $this->getMockCategories();
        
        $view->with('categories', $categories);
    }

    // カテゴリーモデルの仮データ
    private function getMockCategories()
    {
        return [
            new Category(['id' => 1, 'name' => 'Category 1']),
            new Category(['id' => 2, 'name' => 'Category 2']),
        ];
    }
}