<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 13/11/2017
 * Time: 22:02
 */
?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Horizon') }}</title>
    {!! Html::style('css/app.css') !!}
		<!--[if lt IE 9]>
    <!--{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}-->
    {{--{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}--}}
<![endif]-->
</head>
    <body>
        <!-- Header -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <!-- <i class="fa fa-2x fa-bars" aria-hidden="true"></i><i class="fa fa-2x fa-times hidden" aria-hidden="true"></i> -->
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="?page=1"><img src="resources/images/logo-horizon.png" alt="Logo"></a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            {{--<li>--}}
                            {{--<a class="active" href="admin/inscription">Inscription</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                            {{--<a class="active" href="admin">Programmation</a>--}}
                            {{--</li>--}}

                            <li>
                                {{--<a class="active" href="">Programmation</a>--}}
                                {!! link_to_route('Accueil', 'Programmation', [], ['class' => '']) !!}
                            </li>



                            {{--<li>--}}
                            {{--<a class="active" href="">Connexion</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                            {{--<a class="active" href="admin/connexion">Connexion</a>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                            {{--<a class="active" href="admin/compte">Mon compte</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a class="active" href="admin/deconnexion">Se déconnecter</a>--}}
                            {{--</li>--}}
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Connexion</a></li>
                                <li><a href="{{ route('register') }}">Inscription</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->username }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a class="active" href="{{ route('compte') }}">Mon compte</a>
                                        </li>
                                        @if(Auth::user()->id_streamer)
                                            <li>
                                                <a href="{{ route('showPlanningForm') }}">Mettre à jour le planning</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>

        <div class="container">
            @if(Route::current()->uri() === 'compte')
                <div class="col-lg-3 parameters">
                    <h3 class="text-center"> <i class="fa fa-cog" aria-hidden="true"></i> <u>Paramètres</u></h3>
                    <ul class="">
                        <li id="profil" ><a href="">Profil</a></li>
                        <li id="preferences" ><a href="">Préférences</a></li>
                        <li id="security" ><a href="">Sécurité</a></li>
                    </ul>
                    <br>
                    <h4 class="text-center"><a href="?page=39"> <i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion</a></h4>
                </div>
            @endif
            @yield('contenu')
        </div>

    </body>
    <br/>

    {{ Html::image('img/footer.png', 'footer', array('width' => 1050, 'class' => 'center-block')) }}

    @yield('javascript')
    {!! Html::script('js/app.js') !!}
</html>


