<!DOCTYPE html>
<html lang="ja">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/products/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/products/base.css') }}">

@yield('style')

<title>商品管理</title>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">mogitate</h1>
        </div>
    </header>

    <main class="main">

        @hasSection('page-title')
            <div class="page-header">
                <h2 class="page-title">
                    @yield('page-title')
                </h2>

                <a href="/products/register" class="add-button">
                    ＋商品を追加
                </a>
            </div>
        @endif

        @yield('content')

    </main>

</body>

</html>
