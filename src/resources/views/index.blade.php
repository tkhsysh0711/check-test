<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <h2 class="contact__title">Contact</h2>
        <div class="contact__form">
            <form>
                <label>お名前<input type="text" /><input type="text" /></label>

                <label>メールアドレス<input type="text" /></label>

                <label>住所<input type="text" /></label>
                <label>建物名<input type="text" /></label>
                <label>お問い合わせの種類<select name="select"></select></label>
                <label>お問い合わせ内容<textarea name="textarea" cols="30" rows="4"></textarea>
            </form>

            <div class="form__button">
                <button class=form__button--check>確認画面</button>
            </div>
        </div>
    </main>
</body>
</html>