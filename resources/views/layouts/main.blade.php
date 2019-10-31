
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Whatever - Hacker Experience</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/he.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
        {{--        <link rel="stylesheet" href="{{ asset('css/he_login.css') }}" />--}}
        <link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/wysiwyg.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    </head>
    <body>
        <div id="header">
            <h1><a href="#">Hacker Experience</a></h1>
        </div>
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a href="profile"><i class="fa fa-inverse fa-user"></i> <span class="text">My Profile</span></a></li>
                <li class="btn btn-inverse"><a href="mail"><i class="fa fa-inverse fa-envelope"></i> <span class="text">Inbox</span> <span class="mail-unread"></span></a></li>
                <li class="btn btn-inverse"><a href="settings"><i class="fa fa-inverse fa-wrench"></i> <span class="text">Settings</span></a></li>
                <li class="btn btn-inverse"><a href="logout"><i class="fa fa-power-off fa-inverse"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>
        <span id="notify"></span>
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="fa fa-inverse fa-chevron-down"></i> Home</a>
            <ul>
                <li class="active"><a href="index"><i class="fa fa-inverse fa-home"></i>Home</a></li>
                <li><a href="processes"><i class="fa fa-inverse fa-tasks"></i>Task Manager</a></li>
                <li id="menu-software"><a href="software"><i class="fa fa-inverse fa-folder-open"></i>Software</a></li>
                <li id="menu-internet"><a href="internet"><i class="fa fa-inverse fa-globe"></i>Internet</a></li>
                <li><a href="log"><i class="fa fa-inverse fa-book"></i>Log File</a></li>
                <li><a href="hardware"><i class="fa fa-inverse fa-desktop"></i>Hardware</a></li>
                <li><a href="university"><i class="fa fa-inverse fa-flask"></i>University</a></li>
                <li><a href="finances"><i class="fa fa-inverse fa-briefcase"></i>Finances</a></li>
                <li><a href="list"><i class="fa fa-inverse fa-terminal"></i>Hacked Database</a></li>
                <li id="menu-mission"><a href="missions"><i class="fa fa-inverse fa-building-o"></i>Missions</a></li>
                <li><a href="ranking"><i class="fa fa-inverse fa-bars"></i>Ranking</a></li>
                <li><a href="fame"><i class="fa fa-inverse fa-star"></i>Hall of Fame</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="content-header">
                <h1>Whatever</h1>
                <div class="header-ip hide-phone">
                    <div style="text-align: right;">
                        <span class="header-ip-show"></span>
                    </div>
                    <div class="header-info">
                        <div class="pull-right">
                            <span class="icon-tab he16-time" title="Server Time"></span> <span class="small nomargin" style="margin-right: 7px;">{{ date('Y-m-d H:i') }}</span>
                            <span class="online"></span>
                            <div class="reputation-info"></div><div class="finance-info"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="breadcrumb">
                <a href="index" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
                <a href="index" title="Go to Home" class="tip-bottom">wtf</a>
            </div>
            <div class="container-fluid">
                <div class="row-fluid">
                </div>
            </div>
        </div>
        <!--[if IE]><script src="{{ asset('js/excanvas.min.js') }}"></script><![endif]-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.min.js') }}"></script>
        <!--<script src="js/jquery.flot.resize.min.js"></script>-->
        <!--<script src="js/jquery.peity.min.js"></script>-->
        <script src="{{ asset('js/jquery.validate.js') }}"></script> <!-- tmp -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
