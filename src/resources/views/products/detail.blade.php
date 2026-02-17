@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products/detail.css') }}">
@endsection

@section('content')
    <div class="product-update">

        <p class="product-update__breadcrumb">
            <a href="/products">商品一覧</a> ＞ {{ $product->name }}
        </p>

        <form action="/products/{{ $product->id }}/update" method="post" enctype="multipart/form-data"
            class="product-update__form">

            @csrf
            @method('PUT')

            <div class="product-update__inner">
                <div class="product-update__image-area">
                    <img src="{{ asset('storage/' . $product->image) }}" class="product-update__image">

                    <input type="file" name="image">

                    @error('image')
                        <p class="error__message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="product-update__info">
                    <div class="product-update__group">
                        <label>商品名</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}">
                        @error('name')
                            <p class="error__message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="product-update__group">
                        <label>値段</label>
                        <input type="text" name="price" value="{{ old('price', $product->price) }}">

                        @error('price')
                            <p class="error__message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="product-update__group">
                        <label>季節</label>

                        <div class="product-update__group--season">
                            @foreach ($seasons as $season)
                                <label class="product-update__checkbox">
                                    <input type="checkbox" name="seasons[]" value="{{ $season->id }}"
                                        {{ in_array($season->id, old('seasons', $product->seasons->pluck('id')->toArray())) ? 'checked' : '' }}>
                                    {{ $season->name }}
                                </label>
                            @endforeach
                        </div>

                        @error('seasons')
                            <p class="error__message">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="product-update__description">
                <label>商品説明</label>

                <textarea name="description">{{ old('description', $product->description) }}</textarea>

                @error('description')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="product-update__buttons">
                <a href="/products" class="product-update__button--back">
                    戻る
                </a>

                <button type="submit" class="product-update__button--submit">
                    変更を保存
                </button>
            </div>

        </form>

        <form action="/products/{{ $product->id }}/delete" method="post" class="product-update__delete-form">
            @csrf
            @method('DELETE')

            <button type="submit" class="product-update__button--delete">
                🗑
            </button>
        </form>

    </div>
@endsection
