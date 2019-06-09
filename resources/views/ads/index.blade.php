@extends('layouts.ree')
@section('content')    


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">












            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('ree/plugins/pace/pace.min.css') }}">






  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Explore all Ads
          <small>Real Estate</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li><a href="#">Ads</a></li>
          <li class="active">Real Estate</li>
        </ol>
      </section>








      
    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        Pace loading works automatically on page. You can still implement it with ajax requests by adding this js:
        <br/><code>$(document).ajaxStart(function() { Pace.restart(); });</code>
        <br/>
        <div class="row">
        <div class="col-xs-12 text-center">
            <button type="button" class="btn btn-default btn-lrg ajax" title="Ajax Request">
            <i class="fa fa-spin fa-refresh"></i>&nbsp; Get External Content
            </button>
        </div>
        </div>
        <div class="ajax-content">
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        Footer
    </div>
    <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: 'http://localhost', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>

<script src="{{ asset('ree/bower_components/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('ree/bower_components/fastclick/lib/fastclick.js') }}"></script>


<script src="{{ asset('ree/bower_components/PACE/pace.min.js') }}" defer></script>
<script src="{{ asset('ree/plugins/pace/pace.min.js') }}" defer></script>



<style>
    





    .pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;

  z-index: 2000;
  position: fixed;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 5px;
  width: 200px;
  background: #fff;
  border: 1px solid #040404;

  overflow: hidden;
}

.pace .pace-progress {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;

  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);

  max-width: 200px;
  position: fixed;
  z-index: 2000;
  display: block;
  position: absolute;
  top: 0;
  right: 100%;
  height: 100%;
  width: 100%;
  background: #040404;
}

.pace.pace-inactive {
  display: none;
}
</style>


      <!-- Main content -->
      <!--<div class="callout callout-info">
          <h4>Tip!</h4>
          
          <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
              sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
              links instead.</p>
            </div>
            <div class="callout callout-danger">
                <h4>Warning!</h4>
                
                <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
                    and the content will slightly differ than that of the normal layout.</p>
                </div>-->
        <!--<section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Blank Box</h3>
                </div>
                <div class="box-body">
                The great content goes here
                </div>
            </div>
        </section>-->
        <!-- /.box-body -->
        <!-- /.box -->
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>
  <!-- /.content-wrapper -->



@endsection