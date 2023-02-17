<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>
            <a href="{{ route('posts.index') }}">タイトル</a>
        </h1>
        {{ $slot }}
    </div>
</body>
</html>
