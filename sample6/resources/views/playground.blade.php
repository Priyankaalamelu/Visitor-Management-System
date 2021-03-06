<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/metisMenu.min.css" rel="stylesheet">
    <link href="/css/sb-admin-2.css" rel="stylesheet">
    <link href="/css/morris.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" >


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Lato';
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-btn fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </nav>
                </div>

            </div>
        </nav>

        <?php
             $userType = Auth::user()->whoareu;
             if((strcmp($userType,"Visitor"))==0):
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                          <ul class="nav" id="side-menu">
                              <li>
                                  <a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                              </li>
                  <li>
                                  <a href="#"><i class="glyphicon glyphicon-user"></i> Add Employee</a>
                              </li>
                  <li>
                                  <a href="#"><i class="glyphicon glyphicon-sunglasses"></i> Add Administrator</a>
                              </li>

                  <li>
                                  <a href="#"><i class="glyphicon glyphicon-th-list"></i> Booking Details </a>
                              </li>
                  <li>
                                  <a href="#"><i class="glyphicon glyphicon-ban-circle"></i> Block Visitor </a>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-md-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Dashboard
                        </div>
                        <div class="panel-body">
                          <div class="row ">
                              <div class="col-lg-3 col-md-6">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                          <div class="row">
                                              <div class="col-xs-3">
                                                  <i class="glyphicon glyphicon-th-large fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                  <div class="huge">26</div>
                                                  <div>Total People</div>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#">
                                          <div class="panel-footer">
                                              <span class="pull-left">View Details</span>
                                              <span class="pull-right"><i class="glyphicon glyphicon-menu-right"></i></span>
                                              <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                  <div class="panel panel-green">
                                      <div class="panel-heading">
                                          <div class="row">
                                              <div class="col-xs-3">
                                                  <i class="glyphicon glyphicon-briefcase fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                  <div class="huge">12</div>
                                                  <div>Total Employee</div>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#">
                                          <div class="panel-footer">
                                              <span class="pull-left">View Details</span>
                                              <span class="pull-right"><i class="glyphicon glyphicon-menu-right "></i></span>
                                              <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                  <div class="panel panel-yellow">
                                      <div class="panel-heading">
                                          <div class="row">
                                              <div class="col-xs-3">
                                                  <i class="glyphicon glyphicon-eye-open fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                  <div class="huge">124</div>
                                                  <div>Total Visitors</div>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#">
                                          <div class="panel-footer">
                                              <span class="pull-left">View Details</span>
                                              <span class="pull-right"><i class="glyphicon glyphicon-menu-right"></i></span>
                                              <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6">
                                  <div class="panel panel-red">
                                      <div class="panel-heading">
                                          <div class="row">
                                              <div class="col-xs-3">
                                                  <i class="glyphicon glyphicon-ban-circle fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                  <div class="huge">13</div>
                                                  <div>Banned Visitors</div>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#">
                                          <div class="panel-footer">
                                              <span class="pull-left">View Details</span>
                                              <span class="pull-right"><i class="glyphicon glyphicon-menu-right"></i></span>
                                              <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endif; ?>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
