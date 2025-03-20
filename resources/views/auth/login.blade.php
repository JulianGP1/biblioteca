@extends('layouts.applogin')
<script src="https://cdn.tailwindcss.com"></script>

@section('content')
<body class="h-screen bg-cover bg-center bg-no-repeat flex justify-center items-center" style="background-image: url('{{ asset('login.webp') }}');">

  <div class="w-full max-w-md bg-white bg-opacity-10 backdrop-blur-md shadow-xl rounded-lg p-6">
    
    <!-- Título -->
    <div class="text-center mb-4">
      <h2 class="text-2xl font-bold text-gray-800">Inicio de Sesión</h2>
      <p class="text-gray-600">Inicia sesión para ingresar</p>
    </div>

    <!-- Formulario -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Correo Electrónico -->
      <div class="mb-4">
        <input id="email" type="email" name="email" placeholder="Correo Electrónico" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Contraseña -->
      <div class="mb-4">
        <input id="password" type="password" name="password" placeholder="Contraseña" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm @error('password') border-red-500 @enderror" required autocomplete="current-password">
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Botón de inicio -->
      <div class="flex justify-center mt-6">
        <button type="submit" class="bg-black hover:bg-blue-400 text-white font-semibold hover:scale-x-110 py-3 px-8 rounded-lg transition shadow-lg">INICIAR</button>
      </div>

      <!-- Recuperar contraseña -->
      <div class="text-center mt-4">
        @if (Route::has('password.request'))
          <a class="text-gray-700 hover:underline" href="{{ route('password.request') }}">
            ¿Olvidaste tu contraseña?
          </a>
        @endif
      </div>

    </form>

  </div>

</body>
@endsection
