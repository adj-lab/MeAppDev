<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    
    @livewireStyles {{-- Livewire を使用する場合、必須 --}}
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
            <div class="header-contents">
            <a href="{{ route('goalEdit')}}">
                <button class="header-button" type="submit">目標体重設定</button>
            </a>

            <button class="header-button" type="">ログアウト</button>
        </div>

    <div class="container">
        @yield('content') {{-- ここに各ページのコンテンツが入る --}}
    </div>

    @livewireScripts {{-- Livewire を使用する場合、必須 --}}
</body>
</html>