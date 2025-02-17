@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/goal.css') }}">

<div class="all-contents">
    <div class="header-contents">

    </div>
</div>

<body>
<div class="top-contents">
    <div>
        <h3>目標体重設定</h3>
    </div>
    <form class="update-goal" action="{{ route('goalUpdate') }}" method="POST">
        @csrf
        @method('PATCH')
    <input type="text" name="target_weight" value="{{ old('target_weight', $target->target_weight)}}" class="target-form" placeholder="体重を入力：例 50">
        @if ($errors->any())
        <div class="error-messages">
            <ul>
            @foreach ($errors->all() as $error)
                <p class="error-message">{{ $error }}</p>
            @endforeach
            </ul>
        </div>
        @endif

    <div class="header-contents">
        <a href="{{ route('manageWeight')}}"><button class="header-button" type="button">戻る</button></a>
        <button class="header-button" type="submit">更新</button>
    </div>

    </form>
</div>
<div class="center-contents">
    <!-- 検索機能 -->
    <!-- <form action="" method = "POST"> -->
</div>
</div>
</div>
@endsection