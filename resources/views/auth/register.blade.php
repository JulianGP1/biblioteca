@extends('layouts.applogin')
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/webp" href="{{ asset('logo.webp') }}">
@section('content')
<body  style="background-image: url('{{ asset('librery.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="bg-amber-200 h-[90%]  bg-opacity-10 shadow-2xl rounded-2xl  w-[600px] max-w-lg backdrop-blur-md flex flex-col items-center">
      <div class="text-center bg-amber-200 bg-opacity-30  p-3 mt-2 h-[20%] w-[70%] rounded-lg ">
        <h2 class="text-3xl; font-extrabold; text-[25px] ;text-gray-700; select-none">Registro</h2>
        <p class="text-gray-600">Crea tu cuenta en unos simples pasos</p>
      </div>
      
      <form method="POST" action="{{ route('register') }}" class="space-y-2 w-full  place-items-center">
        @csrf
        
        <div class="pb-3">
          <input id="name" type="text" placeholder="Nombre" class="w-[100%] px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        
        <div class="pb-3">
          <input id="email" type="email" placeholder="Correo Electrónico" class="w-[100%] px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        
        <div class="pb-3">
          <input id="password" type="password" placeholder="Contraseña" class="w-[100%] px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm" name="password" required autocomplete="new-password">
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        
        <div>
          <input id="password-confirm" type="password" placeholder="Confirme Contraseña" class="w-[100%]  px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-gray-400 shadow-sm" name="password_confirmation" required autocomplete="new-password">
        </div>
        
        <div class="flex justify-center mt-6">
          <button type="submit" class="bg-black hover:bg-blue-400 text-white font-semibold py-3 px-8 rounded-lg hover:scale-x-110 transition shadow-lg">Registrarse</button>
        </div>
      </form>
      
      <div class="text-center ">
        <a href="/" class="text-gray-70 underline text-blue ">Ya tengo una cuenta</a>
      </div>


    </div>


  </div>

</body>
@endsection
