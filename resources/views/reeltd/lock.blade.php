@extends('layouts.lock')
@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body style="padding-top:120px" class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="/reeltd/locked"><b>RealEstateEmpire</b> LTE</a>
  </div>
  <!-- User name -->

  <div class="container">
    <div class="row justify-content-center">
  <div class="lockscreen-name"><i class="fa fa-lock"></i> Administrators Access Only</div>
<br />
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="{{ asset('ree/dist/img/user.png') }}" alt="User Image">
      <!--<i style="font-size:64px" class="fa fa-user"></i>-->
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" class="form-control" placeholder="password">

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->
    <!-- /.lockscreen-item -->
    <div style="padding-left:50px;text-align:center" class="help-block">
        Enter your password to retrieve your session
    </div>
    <div class="text-center">
      <a href="login.html">Or sign in as a different user</a>
    </div>
  </div>

<!-- /.center -->



</div>
    </div>
</body>


@endsection