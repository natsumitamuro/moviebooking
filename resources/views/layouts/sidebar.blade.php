@inject('rankings','App\Http\Controllers\Controller')
<?php
list($ranking1,$ranking2,$ranking3)=$rankings->ranking();
?>
@section('sidebar')
    <div class="col-sm-2 col-xs-2">
        <div class="sticky-top">
            <div class="sub">
            <div class="text-center">
                
                @auth
                    <b>ユーザー名</b><br>
                    <a href="/edit/{{ \Auth::user()->id }}">プロフィール編集画面</a><br>
                    <a href="/booking/{{ \Auth::user()->id }}">予約一覧</a><br>
                    <a href="/logout">ログアウト</a>
                @else
                    <b>新規登録をしよう</b><br>
                    <a href="/register">新規登録画面</a><br>
                    <a href="/login">登録済みの方はこちら</a>
                @endauth

                <div class="fixed-bottom col-sm-2 col-xs-2">
                    <h3>映画ランキング</h3>
                <table class="table">
                        <tr>
                            <td style="color:gold"><font size="6">1</td>
                            <th>{{ $ranking1->name }}</th>
                            <th>{{ $ranking1->count }}</th>
                        </tr>
                        <tr>
                            <td style="color:silver"><font size="5">2</td>
                            <th>{{ $ranking2->name }}</th>
                            <th>{{ $ranking2->count }}</th>
                        </tr>
                        <tr>
                            <td style="color:#D7893C"><font size="4">3</td>
                            <th>{{ $ranking3->name }}</th>
                            <th>{{ $ranking3->count }}</th>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection