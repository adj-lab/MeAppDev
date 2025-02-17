@extends('layouts.app')
@section('content')
<div class="all-contents">
    <div class="header-contents">

        <input type="text" name="keyword" class="keyword" placeholder="商品名で検索">
        <button type="submit" class="submit-button">検索</button>

    </div>

    <div class="top-contents">
        <h3>目標体重</h3>
        <h3>目標まで</h3>
        <h3>最新体重</h3>
    </div>

    <div class="center-contents">
        @csrf
        <input type="text" name="keyword" class="keyword" placeholder="商品名で検索">
        <button type="submit" class="submit-button">検索</button>

        <!-- Livewire のモーダル -->
        @livewire('weight-log-modal')

        <!-- データ追加機能 -->
        <button wire:click="$emit('openModal')" class="bg-green-500 text-white px-4 py-2 rounded">データ追加</button>
        
        <div class="product-contents"></div>
    </div>
</div>
@endsection