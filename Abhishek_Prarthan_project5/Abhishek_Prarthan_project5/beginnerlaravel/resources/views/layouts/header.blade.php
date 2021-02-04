
	@extends('layouts.bootstraphead')
	

	<div class="container-fluid" style="background-color: #fff !important;">
<div class="row no-gutters text-center">
	<div class="col-sm-2">
		<img onclick="window.location='{{url("Inicio")}}'" style="width:100%;cursor:pointer;" src="./images/Images/i.jpg">
	</div>
	<div class="col-sm-1"></div>
	<div class="col-sm-1 mt-4  pt-4">
		<a  class="crsr-ptr" onclick="window.location='{{url("Inicio")}}'">
			<h4 class="{{(request()->is('Inicio'))? 'active':''}}">Inicio</h4>
		</a>
	</div>
	<div class="col-sm-1 pt-4 mt-4">
		<a  class="crsr-ptr" onclick="window.location='{{url("Nosotros")}}'">
			<h4 class="{{(request()->is('Nosotros'))? 'active':''}}">Nostros</h4>
		</a>
	</div>
	<div class="col-sm-1 pt-4 mt-4">
		<a class="crsr-ptr" onclick="window.location='{{url("Equipos")}}'">
			<h4 class="{{(request()->is('Equipos'))? 'active':''}}">Equipos</h4>
		</a>
	</div>
	<div class="col-sm-1 pt-4 mt-4">
		<a class="dflt-clr crsr-ptr" href="http://pxp3770.uta.cloud/" target="_blank">
			<h4>Blog</h4>
		</a>
	</div>
	<div class="col-sm-1 pt-4 mt-4">
		<a class="crsr-ptr" onclick="window.location='{{url("Contacto")}}'">
			<h4 class="{{(request()->is('Contacto'))? 'active':''}}">Contacto</h4>
		</a>
	</div>
@if (Route::has('login'))
 @auth
	<div class="col-sm-1">
		<a class="dflt-clr crsr-ptr" href="{{ url('/home') }}">
			<h4 class="mt-4 pt-4" class="{{(request()->is('Home'))? 'active':''}}">Home</h4>
		</a>
		
	</div>
	<div class="col-sm-1">
		<a class="dflt-clr crsr-ptr" href="{{ url('/home') }}">
			<h4 class="mt-4 pt-4" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">{{ __('Logout') }}({{ Auth::user()->name }})</h4>
		</a>
	</div>
	@else
	<div class="col-sm-2 pl-3 mt-4 pt-4">
		<a class="crsr-ptr dflt-clr" onclick="window.location='{{url("login")}}'">
			<h4 class="{{(request()->is('login'))? 'active':''}}">Inicio de Sesion</h4>
		</a>
	</div>
	 @if (Route::has('register'))
	 <div class="col-sm-1 pt-4 mt-4">
	 	<a class="crsr-ptr dflt-clr" onclick="window.location='{{url("register")}}'">
	 		<h4 class="{{(request()->is('register'))? 'active':''}}">Registero</h4>
	 	</a>
	 </div>
	 @endif
     @endauth
	 @endif
</div>
	</div>
	<body>




   <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
<!-- <button type="button" class="btn btn-danger">Danger</button> -->
<!-- <button type="button" class="btn btn-link">Link</button> -->
