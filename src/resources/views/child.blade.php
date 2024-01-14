{{-- 親レイアウトを継承 --}}
{{-- @extends('parent') --}}

{{-- @yieldで指定した箇所へ組み込み --}}
{{-- @section('content') --}}

{{-- <h2>コンテンツ</h2> --}}
{{-- form組み込み --}}
{{-- @include('form') --}}
    {{-- @include('form', [
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


@endsection --}}




{{-- x-component --}}

<x-parent>
    <h2>コンテンツ</h2>
    <x-form>
        <x-slot:formAction></x-slot>
        <x-slot:formMethod>post</x-slot>

        <x-slot:label1>Input</x-slot>
        <x-slot:id1>item1</x-slot>
        <x-slot:name1>item1</x-slot>

        <x-slot:label2>Radio</x-slot>
        <x-slot:radioName>radio</x-slot>
        <x-slot:radioId1>radio1</x-slot>
        <x-slot:radioId2>radio2</x-slot>

        <x-slot:label3>Select</x-slot>
        <x-slot:selectName>item3</x-slot>
        <x-slot:selectId>select1</x-slot>
        <x-slot:optionValue1>value1</x-slot>
        <x-slot:optionText1>Option 1</x-slot>
        <x-slot:optionValue2>value2</x-slot>
        <x-slot:optionText2>Option 2</x-slot>
        <x-slot:optionValue3>value3</x-slot>
        <x-slot:optionText3>Option 3</x-slot>

        <x-slot:submitText>送信</x-slot>
    </x-form>
</x-parent>