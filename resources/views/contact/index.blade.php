@extends('layouts.app')

@section('content')
<form action="{{ route('contact.confirm') }}" method="POST">
@csrf

<label>メールアドレス</label>
<input type="text" name="email" value="{{ old('email') }}">


<label>タイトル</label>
<input name="title" value="{{ old('title') }}" type="text">


<label>お問い合わせ</label>
<textarea name="body">{{ old('body') }}</textarea>


<button type="submit">
入力内容確認
</button>
</form>
@endsection