<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title>会員登録編集画面</title>
</head>

<body class="bg-light">

    <div class="container">

        <h2 class="card-title my-5 text-center">movieシステム</h2>

        <h3 class="card-title my-5 text-center">編集画面</h3>


        <form class="" method="POST" action="{{route('update',['id'=>$user->id])}}">
@csrf

<input type="hidden" name="id" value="{{ $user->id }}">
            <div class="col-md-3 mt-3 mx-auto" @if(!empty($errors->first('name'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('name')}}</span>
                <p class="mb-3">名前</p>
                <input type="text" class="form-control mb-3" name="name" value="{{ $user->name }}">
            </div>

            <div class="col-md-3 mx-auto" @if(!empty($errors->first('email'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('email')}}</span>
                <p class="mb-3">メールアドレス</p>
                <input type="text" class="form-control mb-3" name="email" value="{{ $user->email }}">
            </div>

            <div class="col-md-3 mx-auto"@if(!empty($errors->first('classification'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('classification')}}</span>
                <p class="mb-3">区分</p>
                <select class="form-control mb-3" name="classification">
                    
                    <option hidden>選択してください</option>
                    <option value="3" @if($user->classification =="3") selected @endif>中学生以下</option>
                    <option value="2" @if($user->classification =="2") selected @endif>高校生</option>
                    <option value="1" @if($user->classification =="1") selected @endif>大学生/専門学校生</option>
                    <option value="0" @if($user->classification =="0") selected @endif>大人</option>
                </select>
            </div>

            <div class="col-md-3 mx-auto"@if(!empty($errors->first('gender'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('gender')}}</span>
                <p class="">性別</p>
                <input type="radio" id="gender0" name="gender" value="0" @if($user->gender == "0") checked @endif>
                <label for="gender0">男性</label>

                <input type="radio" id="gender1" name="gender" value="1" @if($user->gender == "1") checked @endif>
                <label for="gender1">女性</label>

            </div>

            <div class="col-md-3 mt-3 mx-auto" @if(!empty($errors->first('password'))) has-error @endif>
                <span class="alert-danger">{{$errors->first('password')}}</span>
                <p class="mb-3">パスワード</p>
                <input type="password" class="form-control mb-3 " name="password" placeholder="新しいパスワード" minlength="4" maxlength="128">
            </div>

            <div class="text-center form-button">
                <button type="submit" class="btn btn-success btn-lg">編集完了</button>
            </div>
        </form>

    </div>

</body>

</html>