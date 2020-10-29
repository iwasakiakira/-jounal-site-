@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>論文編集</h1>

<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
@csrf

<!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
@method('PUT')

<p>
    タイトル:<br>
<input type="text" name="title" value="{{ old('title') }}">
</p>

<p>
    論文詳細:<br>
<textarea type="text" name="body" value="{{ old('body') }}"></textarea><br><br>


<input type="submit" value="更新">
</form>
