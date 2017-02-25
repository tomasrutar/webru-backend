<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'default') | localhost</title>

    <link href="{{ asset('/plugins/bootstrap/3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/backend.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


@include('WebruBackendViews::partials.header')
<main id="wrapper">
    <div id="wrapper-sidebar">
        <div class="sidebar-menu">
            <ul class="nav nav-pills">
                <li class="visible-tooltip-xs">
                    <a href="#" title="dashboard!" data-toggle="tooltip" data-placement="right">
                        <i class="fa fa-dashboard"></i>
                        <span class="hidden-xs">Home</span>
                    </a>
                </li>
                <li class="visible-tooltip-xs">
                    <a href="#" title="dashboard!" data-toggle="tooltip" data-placement="right">
                        <i class="fa fa-dashboard"></i>
                        <span class="hidden-xs">Home</span>
                    </a>
                </li>
                <li class="visible-tooltip-xs">
                    <a href="#" title="dashboard!" data-toggle="tooltip" data-placement="right">
                        <i class="fa fa-dashboard"></i>
                        <span class="hidden-xs">Home</span>
                    </a>
                </li>
                <li class="visible-tooltip-xs">
                    <a href="#" title="dashboard!" data-toggle="tooltip" data-placement="right">
                        <i class="fa fa-dashboard"></i>
                        <span class="hidden-xs">Home</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="wrapper-content">
        <div class="container-fluid">
            @yield('__page', '')
        </div>
    </div>
</main>
@include('WebruBackendViews::partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('/plugins/bootstrap/3.3.7-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/backend.js') }}"></script>
</body>
</html>