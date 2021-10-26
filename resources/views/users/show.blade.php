@extends('layouts.app')
@section('title', $user->name.'的个人中心')

@section('content')
  <div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card ">
        <img class="card-img-top" src="https://tvax3.sinaimg.cn/crop.0.0.1080.1080.180/006lYR5Rly8gnstou9ep7j30u00u0tc0.jpg?KID=imgbed,tva&Expires=1635186284&ssig=RfkJ4pGUxj" alt="{{ $user->name }}">
        <div class="card-body">
          <h5><strong>个人简介</strong></h5>
          <p>我喜欢桃花, 而她缺不喜欢狗尾草!</p>
          <hr>
          <h5><strong>注册于</strong></h5>
          <p>January 01 1901</p>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card ">
        <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
        </div>
      </div>
      <hr>

      {{-- 用户发布的内容 --}}
      <div class="card ">
        <div class="card-body">
          暂无数据 ~_~
        </div>
      </div>

    </div>
  </div>
@stop