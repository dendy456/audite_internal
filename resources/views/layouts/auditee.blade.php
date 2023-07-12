<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Sistem Audit Internal</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('style/images/unmul.png') }}">
    <link rel="shortcut icon" href="{{ asset('style/images/logoKkn.png') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')  }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Audit Internal</a>
                <a class="navbar-brand hidden" href=""><img src="{{ asset('style/images/logoKkn.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('auditee') }}"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-table"></i>Mengunggah File</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-table"></i>Feedback Temuan</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-table"></i>Rencana Tindak Lanjut</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-table"></i>Hasil Audit</a>
                    </li>
                    <li>
                        <a href="{{ route('profileAuditee') }}"> <i class="menu-icon fa fa-user"></i>My Profile</a>
                    </li>
                    
                    <li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <i class="menu-icon fa fa-user"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
 
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>

        </header><!-- /header -->

        @yield('breadcrumbs')

        @yield('content')

    </div><!-- /#right-panel -->

</body>
</html>
