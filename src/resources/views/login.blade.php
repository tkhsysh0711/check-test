<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>

            <a href="register.blade.php">register</a>
        </div>
    </header>

    <main>
        <h2 class="login__title">Login</h2>
        <div class="login__form">
            <form>
                <label>メールアドレス<input type="text" /></label>
                <label>パスワード<input type="text" /></label>
            </form>

            <div class="form__button">
                <button class="form__button-submit">ログイン</button>
            </div>
        </div>
    </main>
</body>
</html>