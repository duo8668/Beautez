<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>52 Fifty Two | @yield('pageTitle')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('includes.styles')
    </head>
    <body id="login">
        <header id="header">
            <div id="logo-group">
                <span id="logo"> <img src="{{asset('img/logo.png')}}" alt="52 Fifty Two"> </span>
            </div>
            @yield('header')
        </header>
        <div id="main" role="main">
            <!-- MAIN CONTENT -->
            <div id="content" class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 centred">
                        <div class="well no-padding">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery 2.1.4 -->
        @include('includes.jscript')

        @yield('endBodyScript')
    </body>
</html>
