@extends('layouts.app')
@include('./layouts/header')
@section('content')
<div class="background-fade" style="background-image: url('../images/Images/homepage-one-banner.jpg');">
    <div class="sesion-cover">
        <div class="sesion-cover1">
            <br><br><br>
            <p class= "p-top">
              <span class="cover-heading active-page"> GENTE </span>
              <br>
            <i>
              <span class="cover-heading-sub">Y CIUDAD </span>
            </i>
            <br>
            </p>
            <p class="inicio-content">
            Buscamos marcar un punto de partida para la transformación de nuestras<br>
            dificultades y diferenciasencimientosfirmes que, desde las ciudades,<br>
            requieren nuestros países latinoamericanos para convertirse en los mejores<br>
            lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino<br>
            por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de<br>
            de vida y asegurar los derechos de las futures generaciones.<br>
            </p>
        </div>
    </div>
</div>
<div class="modalpopup">
    <h2>Inicio de
      <span class="active-page">
        <i>Sesion</i>
      </span>&nbsp; &nbsp;
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &times;</h2>
    <hr class="hr-form">
    <div class="form-container">
       <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="name">Correo</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Tu Correo" name="email" class="form-input">
         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Tu Contraseña" class="form-input" required id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br>
        <br >
        <!-- <hr class="hr-form"> -->
                           <div class="col-md-12">
                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link txt flt-rght" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
        <br>
        <button type="submit" class="sub-button"> {{ __('Login') }}</button>
    </form>
    </div>
</div>

@endsection
