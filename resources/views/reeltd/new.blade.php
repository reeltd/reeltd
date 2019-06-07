@extends('layouts.admin')
@section('content')
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('ree/dist/img/user.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ \Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Create, Edit and Delete</li>
        <li><a href="/reeltd"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="/reeltd"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="active treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Ads</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="/reeltd/new-ad"> <i class="fa fa-plus"></i> Create a New Ad</a></li>
          <li><a href="/reeltd/edit-ad"> <i class="fa fa-edit"></i> Edit Ads</a></li>
          <li><a href="/reeltd/delete-ad"> <i class="fa fa-trash"></i> Delete Ads</a></li>
          </ul>
          <li><a href="/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      <i class="fa fa-plus"></i> New Ad 
        <small>Publisher access level</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/reeltd"><i class="fa fa-home"></i> Dashboard </a></li>
        <li>Ads</li>
        <li class="active">New</li>
      </ol>
    </section>

    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">








        
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
                <form action="" method="POST"> <input class="input-group mb-6" type="text" width="60%" placeholder="Title"> <input class="input-group mb-3" type="text" width="30%" placeholder="slug-2019-0-0-3"> </form>
              
              
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                <div class="input-group-append" id="button-addon4">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
                </div>


                <h3 class="box-title">
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">

              
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
          
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>


    <script>
            // If the container width is below this value, the display mode will switch to inline.
            const switchWidthLimit = 900;

            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    toolbar: {
                        items: [ 'bold', 'italic', '|', 'comment' ]
                    },
                    sidebar: {
                        container: document.querySelector( '#sidebar' )
                    }
                } )
                .then( editor => {
                    // Switch between the inline and sidebar comments according to the window size.
                    const container = document.querySelector( '#container' );
                    const sidebar = document.querySelector( '#sidebar' );

                    const annotations = editor.plugins.get( 'Annotations' );
                    const users = editor.plugins.get( 'Users' );

                    // You need to define "me" to be able to add a comment.
                    users.addUser( { id: 'user-1', name: 'Joe Doe' } );
                    users.defineMe( 'user-1' );

                    function refreshDisplayMode() {
                        if ( container.offsetWidth < switchWidthLimit ) {
                            annotations.switchTo( 'inline' );
                            sidebar.style.display = 'none';
                        } else {
                            annotations.switchTo( 'sidebar' );
                            sidebar.style.display = null;
                        }
                    }

                    editor.ui.view.listenTo( window, 'resize', refreshDisplayMode );

                    refreshDisplayMode();
                } )
                .catch( error => console.error( error ) );
        </script>

  </body>




@endsection
