<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link type="text/css"  href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/Ionicons/css/ionicons.min.css">

    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="/css/bootstrap-table.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('path') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/img/user2-160x160.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/img/user2-160x160.png" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->email }}</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/user2-160x160.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      {{-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
       /.search form  --}}
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <li class="treeview @if(Request::is('home')) active @endif">
          <a href="@if(Request::is('home')) javascript:void @else {{ url('/home') }} @endif"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>

        {{-- Navigation --}}
          <li class="header">NAVIGATION</li>
          
          <li class="treeview @if(Request::is('sales/*')) active @endif">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Sales</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="@if(Request::is('sales/create')) active @endif"><a href="{{ url('/sales/create') }}"><i class="fa fa-circle-o"></i> Add Sales</a></li>
              <li class="@if(Request::is('sales/view')) active @endif"><a href="{{ url('/sales/view') }}"><i class="fa fa-circle-o"></i> View Sales</a></li>
            </ul>
          </li>

          <li class="treeview @if(Request::is('customer/*')) active @endif">
            <a href="#">
              <i class="fa fa-group"></i> <span>Customers</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="@if(Request::is('customer/create')) active @endif"><a href="{{ url('/customer/create') }}"><i class="fa fa-circle-o"></i> Add Customer</a></li>
              <li class="@if(Request::is('customer/view')) active @endif"><a href="{{ url('/customer/view') }}"><i class="fa fa-circle-o"></i> View Customer</a></li>
            </ul>
          </li>

          <li class="treeview @if(Request::is('purchase/*')) active @endif">
            <a href="#">
              <i class="fa fa-shopping-bag"></i> <span>Purchase</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="@if(Request::is('purchase/create')) active @endif"><a href="{{ url('/purchase/create') }}"><i class="fa fa-circle-o"></i> Add Purchase</a></li>
              <li class="@if(Request::is('purchase/view')) active @endif"><a href="{{ url('/purchase/view') }}"><i class="fa fa-circle-o"></i> View Purchase</a></li>
            </ul>
          </li>

          <li class="treeview @if(Request::is('supplier/*')) active @endif">
            <a href="#">
              <i class="fa fa-truck"></i> <span>Supplier</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="@if(Request::is('supplier/create')) active @endif"><a href="{{ url('/supplier/create') }}"><i class="fa fa-circle-o"></i> Add Supplier</a></li>
              <li class="@if(Request::is('supplier/view')) active @endif"><a href="{{ url('/supplier/view') }}"><i class="fa fa-circle-o"></i> View Supplier</a></li>
            </ul>
          </li>

          <li class="treeview @if(Request::is('stock/*') || Request::is('category/*')) active @endif">
            <a href="#">
              <i class="fa fa-briefcase"></i> <span>Stocks / Product</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="@if(Request::is('stock/create')) active @endif"><a href="{{ url('/stock/create') }}"><i class="fa fa-circle-o"></i> Add Stock / Product</a></li>
              <li class="@if(Request::is('stock/view')) active @endif"><a href="{{ url('/stock/view') }}"><i class="fa fa-circle-o"></i> View Stock / Product</a></li>
              <li class="@if(Request::is('category/create')) active @endif"><a href="{{ url('/category/create') }}"><i class="fa fa-circle-o"></i> Add Stock Category</a></li>
              <li class="@if(Request::is('category/view')) active @endif"><a href="{{ url('/category/view') }}"><i class="fa fa-circle-o"></i> View Stock Category</a></li>
              <li class="@if(Request::is('stock/view/availability')) active @endif"><a href="{{ url('/stock/view/availability') }}"><i class="fa fa-circle-o"></i> View Stock Availability</a></li>
            </ul>
          </li>

          <li class="treeview @if(Request::is('transaction/payments')) active @endif">
            <a href="@if(Request::is('transaction/payments')) javascript:void @else {{ url('/transaction/payments') }} @endif">
              <i class="fa fa-inr"></i> <span>Payments</span>
            </a>
          </li>

          <li class="treeview @if(Request::is('transaction/outstandings')) active @endif">
            <a href="@if(Request::is('transaction/outstandings')) javascript:void @else {{ url('/transaction/outstandings') }} @endif">
              <i class="fa fa-credit-card"></i> <span>Outstandings</span>
            </a>
          </li>

          <li class="treeview @if(Request::is('report/generate')) active @endif">
            <a href="@if(Request::is('report/generate')) javascript:void @else /report/generate @endif">
              <i class="fa fa-line-chart"></i> <span>Reports</span>
            </a>
          </li>

        {{-- END OF NAVIGATION --}}

        {{-- Direct Links --}}

          <li class="header">Direct Links</li>
          <li class="@if(Request::is('sales/create')) active @endif"><a href="@if(Request::is('sales/create')) javascript:void @else /sales/create @endif"><i class="fa fa-circle-o text-success"></i> <span>Add Sales</span></a></li>
          <li class="@if(Request::is('purchase/create')) active @endif"><a href="@if(Request::is('purchase/create')) javascript:void @else /purchase/create @endif"><i class="fa fa-circle-o text-red"></i> <span>Add Purchase</span></a></li>
          <li class="@if(Request::is('supplier/create')) active @endif"><a href="@if(Request::is('supplier/create')) javascript:void @else /supplier/create @endif"><i class="fa fa-circle-o text-aqua"></i> <span>Add Supplier</span></a></li>
          <li class="@if(Request::is('customer/create')) active @endif"><a href="@if(Request::is('customer/create')) javascript:void @else /customer/create @endif"><i class="fa fa-circle-o text-yellow"></i> <span>Add Customer</span></a></li>
          <li class="@if(Request::is('report/generate')) active @endif"><a href="@if(Request::is('report/generate')) javascript:void @else /report/generate @endif"><i class="fa fa-circle-o text-primary"></i> <span>Generate Report</span></a></li>

        {{-- END OF Direct Links --}}

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->




  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
<script src="/js/app.min.js"></script>
<script src="/js/bootstrapValidator.min.js"></script>
<script src="/js/default.js"></script>
<script src="/js/bootstrap-table.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/Chart.min.js"></script>
<script type="text/javascript" src="/js/barchart.js"></script>
</body>
</html>
