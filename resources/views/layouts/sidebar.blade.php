@section('sidebar')
    <div class="col-sm-2 col-xs-2">
        <div class="sticky-top">
            <div class="sub">
            <div class="text-center">
                
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
        </div>
    </div>
@endsection