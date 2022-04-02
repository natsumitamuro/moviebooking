@inject('rankings','App\Http\Controllers\Controller')
<?php
list($ranking1,$ranking2,$ranking3)=$rankings->ranking();
?>
@section('sidebar')
<div class="col-sm-2 d-flex flex-column flex-shrink-0 p-3 bg-light sticky-top" style="height: 100vh;">
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
      <div class="fixed-bottom col-sm-2 col-xs-2">
        <h3>映画ランキング</h3>
        <table class="table">
          <tr>
            <td style="color:gold">
              <font size="6">1
            </td>
            <th>{{ $ranking1->name }}</th>
            <th>{{ $ranking1->count }}</th>
          </tr>
          <tr>
            <td style="color:silver">
              <font size="5">2
            </td>
            <th>{{ $ranking2->name }}</th>
            <th>{{ $ranking2->count }}</th>
          </tr>
          <tr>
            <td style="color:#D7893C">
              <font size="4">3
            </td>
            <th>{{ $ranking3->name }}</th>
            <th>{{ $ranking3->count }}</th>
          </tr>
        </table>
      </div>
    </li>
  </ul>
  <hr>

  @auth
  <div class="dropdown dropup">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownLink1"
      data-bs-toggle="dropdown" aria-expanded="false">
      <p>{{ Auth::user()->name }}</p>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownLink1">
      <li><a class="dropdown-item" href="/edit/{{ Auth::user()->id }}">会員登録変更</a></li>
      <li><a class="dropdown-item" href="#">マイページ</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="/logout">ログアウト</a></li>
    </ul>
  </div>
  @else
  <div class="dropdown dropup">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownLink2"
      data-bs-toggle="dropdown" aria-expanded="false">
      ログイン
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownLink2">
      <li><a class="dropdown-item" href="/register">新規登録</a></li>
      <li><a class="dropdown-item" href="/login">ログイン</a></li>
    </ul>
  </div>
  @endauth
  </div>
  @endsection