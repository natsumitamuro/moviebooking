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
                <?php if (isset($_GET['user_id'])) : ?>
                    <b>ユーザー名</b><br>
                    <a href="#">プロフィール編集画面</a><br>
                    <a href="#">ログアウト</a>
                <?php else : ?>
                    <b>新規登録をしよう</b><br>
                    <a href="#">新規登録画面</a><br>
                    <a href="#">登録済みの方はこちら</a>
                <?php endif ; ?>
            </div>
        </div>
        <div class="col-10">
            <h1>上映映画情報</h1>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
        <div class="col-5">
            <img src="/movie-booking/public/image/sample_movie.png" alt="映画の画像" class="border"><br>
            <b>作品名</b><br>
            <a href="#">映画の詳細</a><br>
            <a href="#">予約する</a>
        </div>
      </div>
    </div>
</body>
</html>
               