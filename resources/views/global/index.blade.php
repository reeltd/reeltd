@extends('layouts.global')
@section('content')



<body class="is-preload">



  <!-- Main Header -->
  <header style="margin: 0 0 0 0;" class="main-header">



  
    <!-- Nav -->
    <nav id="nav">
            
        <ul class="container">
            <li><a href="#top">Top</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>
    </nav>

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Real Estate Empire LTE</b></span>
    </a>



    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->

      







    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
        </ul>
    </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="{{ asset('ree/dist/img') }}/{{ \Auth::user()->photo }}" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <!--<i class="fa fa-users text-aqua"></i> 5 new members joined today-->
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <!-- Task item -->
                  <!--
                    <li>
                      <a href="#">-->
                          <!-- Task title and progress text --><!--
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>-->
                      <!-- The progress bar --><!--
                      <div class="progress xs">-->
                        <!-- Change the css width attribute to simulate progress --><!--
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>-->
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset('ree/dist/img') }}/{{ \Auth::user()->photo }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('ree/dist/img') }}/{{ \Auth::user()->photo }}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>










    @endguest













    </nav>
  </header>



<!-- Home -->
    <article id="top" class="wrapper style1">
        <div class="container">
            <div class="row">
                <div class="col-4 col-5-large col-12-medium">
                    <span class="image fit"><img src="{{ asset('inc/images/pic00.jpg') }}" alt="" /></span>
                </div>
                <div class="col-8 col-7-large col-12-medium">
                    <header>
                        <h1>Hi. I'm <strong>Jane Doe</strong>.</h1>
                    </header>
                    <p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license">CCA license</a>.</p>
                    <a href="#work" class="button large scrolly">Learn about what I do</a>
                </div>
            </div>
        </div>
    </article>

<!-- Work -->
    <article id="work" class="wrapper style2">
        <div class="container">
            <header>
                <h2>Here's all the stuff I do.</h2>
                <p>Odio turpis amet sed consequat eget posuere consequat.</p>
            </header>
            <div class="row aln-center">
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-comments-o"></span>
                        <h3>Consequat lorem</h3>
                        <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-camera-retro"></span>
                        <h3>Lorem dolor tempus</h3>
                        <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section class="box style1">
                        <span class="icon featured fa-thumbs-o-up"></span>
                        <h3>Feugiat posuere</h3>
                        <p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
                    </section>
                </div>
            </div>
            <footer>
                <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
                <a href="#portfolio" class="button large scrolly">See some of my recent work</a>
            </footer>
        </div>
    </article>

<!-- Portfolio -->
    <article id="portfolio" class="wrapper style3">
        <div class="container">
            <header>
                <h2>Here’s some stuff I made recently.</h2>
                <p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat.</p>
            </header>
            <div class="row">
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic01.jpg') }}" alt="" /></a>
                        <h3><a href="#">Magna feugiat</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic02.jpg') }}" alt="" /></a>
                        <h3><a href="#">Veroeros primis</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic03.jpg') }}" alt="" /></a>
                        <h3><a href="#">Lorem ipsum</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic04.jpg') }}" alt="" /></a>
                        <h3><a href="#">Tempus dolore</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic05.jpg') }}" alt="" /></a>
                        <h3><a href="#">Feugiat aliquam</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <article class="box style2">
                        <a href="#" class="image featured"><img src="{{ asset('inc/images/pic06.jpg') }}" alt="" /></a>
                        <h3><a href="#">Sed amet ornare</a></h3>
                        <p>Ornare nulla proin odio consequat.</p>
                    </article>
                </div>
            </div>
            <footer>
                <p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
                <a href="#contact" class="button large scrolly">Get in touch with me</a>
            </footer>
        </div>
    </article>

<!-- Contact -->
    <article id="contact" class="wrapper style4">
        <div class="container medium">
            <header>
                <h2>Have me make stuff for you.</h2>
                <p>Ornare nulla proin odio consequat sapien vestibulum ipsum.</p>
            </header>
            <div class="row">
                <div class="col-12">
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-6 col-12-small">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="col-6 col-12-small">
                                <input type="text" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" placeholder="Subject" />
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" /></li>
                                    <li><input type="reset" value="Clear Form" class="alt" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <hr />
                    <h3>Find us on ...</h3>
                    <ul class="social">
                        <li><a target="_blank" href="https://www.snapchat.com/add/reeltd" class="icon fa-snapchat"><span class="label">Snap</span></a></li>
                        <li><a target="_blank" href="https://instagram.com/reeltd0" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=966563375158" class="icon fa-whatsapp"><span class="label">Whatsapp</span></a></li>
                        <li><a target="_blank" href="https://t.me/reeltd" class="icon fa-telegram"><span class="label">Telegram</span></a></li>
                        <li><a target="_blank" href="https://twitter.com/reeltd1" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/reeltd" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <!--<li><a target="_blank" href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
                        <!--<li><a target="_blank" href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
                        <!--<li><a target="_blank" href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>-->
                        <!--<li><a target="_blank" href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>-->
                        <li><a target="_blank" href="https://github.com/reeltd" class="icon fa-github"><span class="label">Github</span></a></li>
                        <!--
                        <li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
                        <li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
                        <li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
                        <li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
                        <li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
                        <li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
                        <li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
                        <li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
                        -->
                    </ul>
                    <hr />
                </div>
            </div>

        </div>
        </article>
            
  <footer class="footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    <p style="font-size:10px">Built with <i class="fa fa-heart"></i> by <a href="https://github.com/exploi8" target="_blank"><kbd>0x000001</kbd></a></p>
    </div>
    <!-- Default to the left -->
    <p style="font-size:10px"><strong>Copyright &copy; 2019 <a href="#">Real Estate Empire LTE</a>.</strong> All rights reserved.</p>
  </footer>
  
  

    </body>


@endsection
