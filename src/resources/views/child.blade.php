{{-- 親レイアウトを継承 --}}
@extends('parent')

{{-- @yieldで指定した箇所へ組み込み --}}
@section('content')

<h2>コンテンツ</h2>
{{-- form組み込み --}}
{{-- @include('form') --}}
    @include('form', [
        'formMethod' => 'post',
        'formAction' => '',

        'label1' => 'Input',
        'id1' => 'item1',
        'name1' => 'item1',
        
        'label2' => 'Radio',
        'radioName' => 'radio',
        'radioId1' => 'radio1',
        'radioId2' => 'radio2',
        
        'label3' => 'Select',
        'selectName' => 'item3',
        'selectId' => 'select1',
        'optionValue1' => 'value1',
        'optionText1' => 'Option 1',
        'optionValue2' => 'value2',
        'optionText2' => 'Option 2',
        'optionValue3' => 'value3',
        'optionText3' => 'Option 3',
        
        'submitText' => '送信',
    ])


@endsection