@extends('layouts.ree')
@section('content')


<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="/reeltd/locked"><b>RealEstateEmpire</b> LTE</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"><i class="fa fa-lock"></i> Administrators Access Only</div>

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

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="login.html">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    <p style="font-size:10px"><strong>Copyright &copy; 2019 <a href="#">Real Estate Empire LTE</a>.</strong> All rights reserved.</p>
  </div>
</div>
<!-- /.center -->


</body>



@endsection