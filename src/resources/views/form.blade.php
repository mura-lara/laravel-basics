<form action="{{ $formAction }}" method="{{ $formMethod }}">

    <label>{{ $label1 }}</label>
    <input type="text" id="{{ $id1 }}" name="{{ $name1 }}" value="{{ $value1 ?? '' }}">

    <br>

    <label>{{ $label2 }}</label>
    <input type="radio" name="{{ $radioName }}" id="{{ $radioId1 }}">
    <input type="radio" name="{{ $radioName }}" id="{{ $radioId2 }}">

    <br>

    <label>{{ $label3 }}</label>
    <select name="{{ $selectName }}" id="{{ $selectId }}">
        <option value="{{ $optionValue1 }}">{{ $optionText1 }}</option>
        <option value="{{ $optionValue2 }}">{{ $optionText2 }}</option>
        <option value="{{ $optionValue3 }}">{{ $optionText3 }}</option>
    </select>

    <br>
    <input type="submit" value="{{ $submitText }}">

</form>