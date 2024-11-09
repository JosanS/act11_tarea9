@extends('adminlte::page')

@section('title', 'Tarea 9')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        @yield('main-content')
    </div>
@stop

@section('footer')
    <footer class="main-footer">
        <strong>&copy; Actividad realizada por Josan</strong>
    </footer>
@stop
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Menus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li.active a {
            font-weight: bold;
            color: red;
        }
    </style>

</head>
<body>
    <nav>
        <ul>
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="{{ request()->routeIs('fotos') ? 'active' : '' }}"><a href="{{ route('fotos') }}">Fotos</a></li>
            <li class="{{ request()->routeIs('contacto') ? 'active' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></li>
            <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Nosotros</a></li>
            <li class="{{ request()->routeIs('servicios') ? 'active' : '' }}"><a href="{{ route('servicios') }}">Servicios</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>Actividad realizada por Josan</p>
    </footer>
</body>
</html>
 -->