@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products/index.css') }}">
@endsection

@section('page-title')
    {{ request('keyword') ? '“' . request('keyword') . '”の商品一覧' : '商品一覧' }}
@endsection

@section('content')
    <div class="layout">

        <aside class="sidebar">
            <form action="/products/search" method="get" class="search-form">
                <input type="text" name="keyword" class="search__input" value="{{ request('keyword') }}"
                    placeholder="商品名で検索">

                <button type="submit" class="search__button">検索</button>

                <div class="sort">
                    <select name="sort" onchange="this.form.submit()">
                        <option value="">価格で並び替え</option>
                        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>高い順に表示</option>
                        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>低い順に表示</option>
                    </select>

                    @if (request('sort'))
                        <div class="sort-chip">
                            <span>
                                {{ request('sort') == 'desc' ? '高い順に表示' : '低い順に表示' }}
                            </span>
                            <a href="{{ request()->url() }}?keyword={{ request('keyword') }}" class="sort-chip__remove">
                                ✕
                            </a>
                        </div>
                    @endif
                </div>
            </form>
        </aside>

        <section class="product-list">
            <div class="product-list__grid">
                @foreach ($products as $product)
                    <div class="product-card">
                        <a href="/products/detail/{{ $product->id }}">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

                            <div class="product-card__info">
                                <span>{{ $product->name }}</span>
                                <span>¥{{ number_format($product->price) }}</span>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="pagination">
                {{ $products->links('pagination::default') }}

            </div>

        </section>

    </div>
@endsection
