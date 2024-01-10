<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>親テンプレート</title>
</head>
<body>
    {{-- ヘッダー挿入 --}}
    @include('header')

    {{-- ここにコンテンツを挿入 --}}
    @yield('content')

    {{-- フッターー挿入 --}}
    @include('footer')
</body>
</html>