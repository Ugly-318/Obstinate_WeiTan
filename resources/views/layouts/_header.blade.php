<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      ObstinateWeiTan
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- 左侧导航栏 -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- 右侧导航栏 -->
      <ul class="navbar-nav navbar-right">
        <!-- 身份验证链接 -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              <img src="https://tvax3.sinaimg.cn/crop.0.0.1080.1080.180/006lYR5Rly8gnstou9ep7j30u00u0tc0.jpg?KID=imgbed,tva&Expires=1635186284&ssig=RfkJ4pGUxj" alt="{{ Auth::user()->name }}的个人头像" class="img-responsive img-circle" width="30px" style="border-radius: 15px">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">个人资料</a>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">编辑资料</a>
              <div class="dropdown-item"></div>
              <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                </form>
              </a>

            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
