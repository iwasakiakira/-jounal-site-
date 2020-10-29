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

<h1>新規論文投稿</h1>
<form action="/articles" method="post">
@csrf
<p>
    タイトル:<br>
<input type="text" name="title" value="{{ old('title') }}">
</p>
    
    論文詳細:<br>
<textarea type="text" name="body" value="{{ old('body') }}"></textarea><br><br>

<input type="submit" value="投稿">
</form>


