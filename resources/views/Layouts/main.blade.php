@extends('layouts.app') 
<div class="wrapper-users">
   
    <div class=" main-nav"> 
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    @guest
                      <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                     @else

                    <li> 
                     <a class="navbar-brand" href="{{route('mainboard')}}"><img src="../img/home.png" width="30" height="30" alt="">
                    </a>
                    </li>

                    <li><a class="nav-link" href="{{route('newU')}}">{{ __('REGISTRO USUARIO') }}</a></li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{route('maile')}}">Correspondencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{route('folder')}}">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{route('clients')}}">Clientes</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active text-uppercase" href="{{route('user')}}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="{{route('others')}}">Otras Configuraciones</a>
                    </li>
                    
                    
                </ul>
                <div class=" my-2 my-lg-0">
                    <a href="" class="question"><i class="far fa-question-circle"></i></a>
                    <div class="user">
                        <a class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->namePerson}}</a>
                        <div class="dropdown-menu dropdown-menu--user dropdown-menu-right">
                            <a class="dropdown-item"  href="{{ route('profile')}}">Perfil de usuario</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        </div>
                    </div>
                     @endguest
                </div>
            </div>
        </nav>
    </div>

</div>

