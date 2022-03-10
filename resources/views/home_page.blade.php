<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ホーム画面</title>
</head>
<body>
    <div class="footer">
       <div class="row text-center justify-content-end"">
        <div class="col-2">
            <div class="sidebar_content border">
                @auth
                    <b>ユーザー名</b><br>
                    <a href="/edit">プロフィール編集画面</a><br>
                    <a href="/logout">ログアウト</a>
                @else
                    <b>新規登録をしよう</b><br>
                    <a href="/register">新規登録画面</a><br>
                    <a href="/login">登録済みの方はこちら</a>
                @endauth
            </div>
        </div>
        <div class="col-10">
            <h1>上映映画情報</h1>
        </div>
        @foreach($movies as $movie)
        <div class="col-5">
            <img src="{{ $movie->img_pass }}" alt="映画の画像" class="border"><br>
            <b>{{ $movie->name }}</b><br>
            <a href="/detail">映画の詳細</a><br>
            <a href="/reservation">予約する</a>
        </div>
        @endforeach
      </div>
    </div>
</body>
</html>
               