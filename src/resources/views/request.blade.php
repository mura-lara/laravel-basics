<body>
    <h1>Request学習</h1>
    <form action="{{ url('request/store') }}" method="post">
        @csrf
        名前：<input type="text" name="name"><br>
        住所：<input type="text" name="address"><br>
        メール：<input type="text" name="mail"><br>
        <input type="submit">
    </form>

    
    @isset($data)
    <p>名前: {{ $data['name'] }}</p>
    <p>住所: {{ $data['address'] }}</p>
    <p>メール: {{ $data['mail'] }}</p>
    @endisset
</body>