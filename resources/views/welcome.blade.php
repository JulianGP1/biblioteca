<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/webp" href="{{ asset('logo.webp') }}">
        <title>Biblioteca</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Tailwind CSS -->

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white text-gray-600 font-raleway h-screen m-0 bg-[url('login.webp')] bg-cover ">

        <div class="flex items-center justify-center  h-full relative">

          

            <div class="text-center">
                <div class="text-6xl font-semibold mb-8 text-black font-bebas hover:font-extrabold select-none">
                <p style="font-family: 'Bebas Neue', sans-serif;" class=" hover:scale-125 hover:text-white hover:underline"> Biblioteca Virtual</p>
                </div>
                @if (Route::has('login') && Auth::check())
                <div class=" ">
                    <a href="{{ url('/home') }}" class="text-gray-600 px-6 py-2 text-sm font-semibold uppercase">Dashboard</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="mb-7">
                    <a href="{{ url('/login') }}" class="text-white px-6 py-2 text-sm font-semibold uppercase hover:underline  hover:border-4 rounded-lg bg-slate-700 bg-opacity-80 hover:bg-opacity-50 border-amber-200 border-spacing-4">logearte</a>
                    <a href="{{ url('/register') }}" class="text-white px-6 py-2 text-sm font-semibold uppercase hover:underline hover:border-4 rounded-lg bg-opacity-80 bg-slate-700 hover:bg-opacity-50 border-amber-200  border-spacing-4">Registrate</a>
                </div>
            @endif
 


            </div>
        </div>
    </body>
</html>
