<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="items-center mt-s">
            <a href="{{ route('posts.index') }}"><img src="{{ asset('image/title.png') }}" class="title-size"></a>
        </div>
        {{ $slot }}
        <div>
            <img src="{{ asset('image/footer.jpeg') }}" class="footer mt-m">
        </div>
    </div>
</body>
</html>
