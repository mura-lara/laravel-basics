<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>親テンプレート</title>
</head>
<body>
    <header>
        <h2>共通ヘッダー</h2>
    </header>

    {{-- ここにコンテンツを挿入 --}}
    {{ $slot }}

    <footer>
        <h2>共通フッター</h2>
    </footer>
</body>
</html>