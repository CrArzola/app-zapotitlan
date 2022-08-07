<!DOCTYPE html>
<html lang="es">
<head>
   <title>Dashboard - SAL DE ORO</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/icon/themify-icons/themify-icons.css">
   <link rel="stylesheet" type="text/css" href="/icon/icofont/css/icofont.css">
   <link rel="stylesheet" type="text/css" href="/icon/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" type="text/css" href="/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="/plugins/chartist/dist/chartist.css" type="text/css" media="all">
   <link href="/css/svg-weather.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="/css/main.css">
   <link rel="stylesheet" type="text/css" href="/css/responsive.css">
   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />

</head>
<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo">SAL DE ORO SYSTEM</a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span>{{ auth()->user()->name }}<i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                         <form action="{{ route('logout')}}" method="POST" >
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-xs btn-block">Cerrar Sessión</button>
                        </form>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <ul class="sidebar-menu">
                <li class="nav-level">--- Inicio</li>
                <li class="reeview @if($menu === 'dashboard') active @endif">
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}">
                        <i class="ti-dashboard"></i><span> Dashboard</span>
                    </a>                
                </li>
          

                <li class="nav-level">--- Administración</li>
                <li class="treeview @if($menu === 'recipes') active @endif">
                    <a class="waves-effect waves-dark" href="{{ route('recipes')}}">
                        <i class="ti-receipt"></i><span>Recetas</span>
                    </a>                
                </li>
                <li class="treeview @if($menu === 'products') active @endif">
                  <a class="waves-effect waves-dark" href="{{ route('products')}}">
                      <i class="ti-gift"></i><span>Productos </span>
                  </a>                
              </li>
            
            </ul>
         </section>
      </aside>
      @yield('content')
   <script src="/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="/plugins/tether/dist/js/tether.min.js"></script>
   <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>
   <script src="/plugins/classie/classie.js"></script>
   <script src="/plugins/notification/js/bootstrap-growl.min.js"></script>
   <script src="/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>
   <script src="/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="/plugins/countdown/js/jquery.counterup.js"></script>
   <script src="/plugins/charts/echarts/js/echarts-all.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>
   <script type="text/javascript" src="/js/main.min.js"></script>
   <script type="text/javascript" src="/pages/dashboard.js"></script>
   <script type="text/javascript" src="/pages/elements.js"></script>
   <script src="/js/menu.min.js"></script>

</body>

</html>
