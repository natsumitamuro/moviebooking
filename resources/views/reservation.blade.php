<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('stylesheet.css') }}" >
    <title>予約画面 | movie-booking</title>
</head>

<body>
    <div class="container-fluid">
        <div class="main-header">
            <h1 class="p-2">予約画面</h1>
        </div>

        <!-- 予約メッセージ -->
        <div class="row justify-content-center">
            <div class="massage py-4">
                座席を選択して下さい。
            </div>
        </div>

        <!-- アイコン説明 -->
        <div class="row justify-content-center">
            <div class="col-6 mb-4">
                <p class="">アイコン説明</p>
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item flex-fill"><img src="{{ asset('img/seat_1.gif') }}" alt=""> 空席</li>
                    <li class="list-group-item flex-fill"><img src="{{ asset('img/seat_2.gif') }}" alt=""> 購入済み</li>
                </ul>
            </div>
        </div>

        <!-- 席 -->
        <div class="row justify-content-center">
            <div class="screen-box bg-secondary p-1">
                <p class="screen-name m-4">SCREEN 1</p>
                <div class="screen-box-inline p-4">
                    <table>
                        <!-- 1列目 -->
                        <tr>
                            <td>A</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>A</td>
                        </tr>
                        <!-- 2列目 -->
                        <tr>
                            <td>B</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>B</td>
                        </tr>
                        <!-- 3列目 -->
                        <tr>
                            <td>C</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>C</td>
                        </tr>
                        <!-- 4列目 -->
                        <tr>
                            <td>D</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>D</td>
                        </tr>
                        <!-- 5列目 -->
                        <tr>
                            <td>E</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>E</td>
                        </tr>
                        <!-- 6列目 -->
                        <tr>
                            <td>F</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>F</td>
                        </tr>
                        <!-- 7列目 -->
                        <tr>
                            <td>G</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>G</td>
                        </tr>
                        <!-- 8列目 -->
                        <tr>
                            <td>H</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>H</td>
                        </tr>
                        <!-- 9列目 -->
                        <tr>
                            <td>I</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>I</td>
                        </tr>
                        <!-- 10列目 -->
                        <tr>
                            <td>J</td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td><img src="{{ asset('img/seat_1.gif') }}" alt=""></td>
                            <td>J</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- 購入ボタン -->
        <div class="row justify-content-center">
            <button type="button" class="btn btn-outline-secondary m-5">購入</button>
        </div>
    </div>
</body>
</html>