@extends('layouts.docs')
@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Documentation Server 
        <small>Docs</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/reeltd"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active">Docs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <embed width="100%" height="480px" src="http://ipool.remotewebaccess.com:810/doc/">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





@endsection
