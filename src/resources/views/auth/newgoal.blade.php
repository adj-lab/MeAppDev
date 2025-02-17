<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/xxxx.css') }}">
</head>
<body>
<div class="">
    <h1>PiGly</h1>
</div>
<div class="">
    <h2>新規会員登録</h2>
    <p>STEP2 体重データの入力</p>
</div>

    <form class="update-goal" action="{{ route('goalUpdate') }}" method="POST">
        @csrf
        @method('PATCH')

    <dl class="form-list">
        <dt>現在の体重</dt>
        <dd><input type="text" name="now_weight" class="now-weight-form" placeholder="現在の体重を入力"></dd>
        <dt>目標の体重</dt>
        <dd><input type="text" name="target_weight" class="target-weight-form" placeholder="現在の体重を入力"></dd>
    </dl>
    <div>
        <button type="submit">アカウント作成</button>
    </div>
</body>
</html>