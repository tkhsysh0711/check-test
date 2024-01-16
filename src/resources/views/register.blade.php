<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>

            <a href="login.blade.php">login</a>
        </div>
    </header>

    <main>
        <h2 class="register__title">Register</h2>
        <div class="register__form">
            <form>
                <label>お名前<input type="text" /></label>
                <label>メールアドレス<input type="text" /></label>
                <label>パスワード<input type="text" /></label>
            </form>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </div>
    </main>
</body>
</html>