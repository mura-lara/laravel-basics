<body>
    <h1>Request学習</h1>
    <form action="{{ url('request/store') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="submit">
    </form>

    @isset($text)
     <p>{{ $text }}</p>
    @endisset
</body>