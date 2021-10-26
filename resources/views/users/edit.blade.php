@extends('layouts.app')
@section('title', '个人编辑页面')

@section('content')
  <div class="container">
    <div class="col-md-8 offset-md-2">

      <div class="card">
        <div class="card-header">
          <h4>
            <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
          </h4>
        </div>

        <div class="card-body">

          <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @include('shared._error')
            <div class="form-group">
              <label for="name-filed">用户名</label>
              <input class="form-control" type="text" name="name" id="name-filed" value="{{ old('name', $user->name) }}" />
            </div>
            <div class="form-group">
              <label for="email-filed">邮 箱</label>
              <input class="form-control" type="text" name="email" id="email-filed" value="{{ old('email', $user->email) }}" />
            </div>
            <div class="form-group">
              <label for="introduction-filed">个人简介</label>
              <textarea name="introduction" id="introduction-filed" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
            </div>
            <div class="well well-sm">
              <button type="submit" class="btn btn-primary">
                保存
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@stop
