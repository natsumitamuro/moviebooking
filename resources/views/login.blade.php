<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>ログイン画面</title>
</head>

<body class="bg-light">

    <div class="container">

        <h2 class="card-title my-5 text-center">movieシステム</h2>

        <h3 class="card-title my-5 text-center">ログイン画面</h3>


        <form class="" method="POST" action="/login">
        @csrf
            <div class="col-md-3 mx-auto">
                <p class="mb-3">メールアドレス</p>
                <input type="text" class="form-control mb-3" name="email" required>
            </div>

            <div class="col-md-3 mt-3 mx-auto">
                <p class="mb-3">パスワード</p>
                <input type="password" class="form-control mb-3 " name="password" placeholder="パスワード" minlength="4" maxlength="128" required>
            </div>

            <div class="text-center form-button mb-3">
                <button type="submit" class="btn btn-success btn-lg">ログイン</button>
            </div>
        </form>

        <div class="text-center form-button">
            <a href="{{ url('/register') }}">
                <button type="submit" class="btn btn-primary btn-lg">新規登録</button>
            </a>
        </div>

    </div>

</body>

</html>