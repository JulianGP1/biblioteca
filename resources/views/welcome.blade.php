<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-white text-gray-600 font-raleway h-screen m-0 bg-[url('login.webp')] bg-cover ">

        <div class="flex items-center justify-center h-full relative">

            @if (Route::has('login') && Auth::check())
                <div class="absolute top-4 right-4">
                    <a href="{{ url('/home') }}" class="text-gray-600 px-6 py-2 text-sm font-semibold uppercase">Dashboard</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="absolute top-4 right-4">
                    <a href="{{ url('/login') }}" class="text-white px-6 py-2 text-sm font-semibold uppercase hover:underline  hover:border-4 rounded-lg hover:bg-slate-700 hover:bg-opacity-50 border-amber-200 border-spacing-4">logearte</a>
                    <a href="{{ url('/register') }}" class="text-white px-6 py-2 text-sm font-semibold uppercase hover:underline hover:border-4 rounded-lg hover:bg-slate-700 hover:bg-opacity-50 border-amber-200  border-spacing-4">Registrate</a>
                </div>
            @endif

            <div class="text-center">
                <div class="text-6xl font-semibold mb-8 text-black hover:font-extrabold select-none">
                    Biblioteca virtual
                </div>
                <a href="https://laravel.com/docs" class="text-white px-6 py-2 text-xs font-semibold uppercase">Documentation</a>


            </div>
        </div>
    </body>
</html>
