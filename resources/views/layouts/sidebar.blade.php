@section('sidebar')


     
  <div class="col-sm-2 d-flex flex-column flex-shrink-0 p-3 bg-light" style="height: 100vh;">
      <span class="fs-3">Movie</span>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link active" aria-current="page">
          <svg class="bi me-3" width="16" height="16"></svg>
          ホーム
        </a>
      </li>
      <li>
        <a href="/genre/1" class="nav-link link-dark">
          <svg class="bi me-3" width="16" height="16"></svg>
          ジャンル
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-3" width="16" height="16"></svg>
          ランキング
        </a>
      </li>
    </ul>
    <hr>
    
    
    @auth
      <div class="dropdown dropup">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownLink1" data-bs-toggle="dropdown" aria-expanded="false">
              <p>{{ Auth::user()->name }}</p>
            </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownLink1">
            <li><a class="dropdown-item" href="/edit/{{ Auth::user()->id }}">会員登録変更</a></li>
            <li><a class="dropdown-item" href="#">マイページ</a></li>
            <li><a class="dropdown-item" href="/logout">ログアウト</a></li>
        </ul>
      </div>
    @else
      <div class="dropdown dropup">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownLink2" data-bs-toggle="dropdown" aria-expanded="false">
            <p>ログイン</p>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownLink2">
            <li><a class="dropdown-item" href="/register">新規登録</a></li>
            <li><a class="dropdown-item" href="/login">ログイン</a></li>
        </ul>
      </div>
    @endauth
    
  </div>







    {{-- <div class="col-sm-2 col-xs-2">
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
    </div> --}}
@endsection