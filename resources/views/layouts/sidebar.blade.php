@section('sidebar')
    <div class="col-sm-2 col-xs-2">
        <div class="sticky-top">
            <div class="sub">
            <div class="text-center">
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
        </div>
    </div>
@endsection