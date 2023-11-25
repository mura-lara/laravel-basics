<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サービスの学習</title>
</head>
<body>
    <h1>Serviceクラスの学習</h1>
    <form action="sample" method="post">
        @csrf
        <input type="checkbox" name="check1">
        <input type="checkbox" name="check2">
        <input type="checkbox" name="check3">
        <input type="checkbox" name="check4">
        <input type="checkbox" name="check5">
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>