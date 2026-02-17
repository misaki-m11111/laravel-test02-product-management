@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products/register.css') }}">
@endsection

@section('content')
    <div class="product-register">

        <h1 class="product-register__title">商品登録</h1>

        <form action="/products/register" method="post" enctype="multipart/form-data" class="product-register__form">
            @csrf
            <div class="form-group">
                <div class="form-label">
                    <label for="name">商品名</label>
                    <span class="required">必須</span>
                </div>

                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="商品名を入力">

                @error('name')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-label">
                    <label for="price">値段</label>
                    <span class="required">必須</span>
                </div>

                <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="値段を入力">

                @error('price')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-label">
                    <label for="image">商品画像</label>
                    <span class="required">必須</span>
                </div>

                <input type="file" id="image" name="image">

                @error('image')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-label">
                    <label>季節</label>
                    <span class="required">必須</span>
                    <span class="multiple">複数選択可</span>
                </div>

                <div class="season-grid">
                    @foreach ($seasons as $season)
                        <label class="season-item">
                            <input type="checkbox" name="seasons[]" value="{{ $season->id }}"
                                {{ in_array($season->id, old('seasons', [])) ? 'checked' : '' }}>
                            {{ $season->name }}
                        </label>
                    @endforeach
                </div>

                @error('seasons')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-label">
                    <label for="description">商品説明</label>
                    <span class="required">必須</span>
                </div>

                <textarea id="description" name="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>

                @error('description')
                    <p class="error__message">{{ $message }}</p>
                @enderror
            </div>

            <div class="button-area">
                <a href="/products" class="btn-back">
                    戻る
                </a>
                <button type="submit" class="btn-submit">
                    登録
                </button>
            </div>

        </form>

    </div>
@endsection
