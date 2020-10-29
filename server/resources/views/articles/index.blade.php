<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>論文一覧</title>
</head>
<body>
    <h1>論文一覧</h1>
<ul class="delete-marker">
    @foreach ($article as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a><br><br>
    @endforeach
<br>
    {{-- 新規投稿画面に移行する｡ --}}
    <a href="/articles/create"><button>新規投稿</button></a>
</ul>
</body>
</html>



