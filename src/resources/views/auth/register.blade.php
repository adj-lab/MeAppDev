<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
<div class="">
    <h1>PiGly</h1>
</div>
<div class="">
    <h2>新規会員登録</h2>
    <p>STEP1 アカウント情報の登録</p>
</div>
<form method="POST" action="{{ route('register1') }}">
    @csrf
    <dl class="form-list">
        <dt>お名前</dt>
        <dd><input type="name" name="name" value="{{ old('name') }}"></dd>
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
    </dl>
    <div>
        <a href="{{ route('newWeight')}}"><button class="header-button" type="submit">次に進む</button></a>
    </div>
    <div>
        <a href="{{ route('login')}}"><button class="header-button" type="button">ログイン</button></a>
    </div>
</form>
</body>
</html>