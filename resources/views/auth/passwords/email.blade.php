@extends('layouts.applogin')
 @section('content')
 <div class="bg-[url('{{ asset('login.webp') }}')] h-screen w-screen bg-cover items-center flex justify-center">
  

<div class="login-box bg-amber-100 rounded-r-full bg-opacity-70  ">
  <div class="login-logo bg-amber-200 rounded-bl-full bg-opacity-70">
    <a href="../../index2.html"><b>Recupera </b>tú <b> cuenta</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body bg-amber-200 bg-opacity-50">
      <p class="login-box-msg ">Olvidaste tu contraseña? tranquilo aca puedes recuperarla</p>
              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
      <form method="POST" action="{{ route('password.email') }}">
              @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

             @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="/">Volver a inicio</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
@endsection
