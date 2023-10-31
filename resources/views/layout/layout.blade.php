<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Igogo SIS | @yield('title', 'Home')</title>
</head>

<body>
    <!--DEFINING LAYOUT OF THE PAGE -->

    <div class="antialiased bg-gray-50 dark:bg-gray-900">


        @include('partials.header')

        @include('partials.sidebar')

        {{-- MAIN CONTENTS --}}
        <!--The Main Content/ Central Part of the Application-->
        <main class="p-4 md:ml-64 h-auto pt-20">
            <div class="
                    text-3xl
                    m-1 
                    p-1
                    font-bold
                    uppercase
                ">
                <h1 class="
                        text-center 
                        text-blue-500
                        underline
                    ">
                        @yield('heading', 'WELCOME TO IGOGO MANAGEMENT SYSTEM')
                </h1>
            </div>

            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4"> --}}
                <!--These are four divs which devides
                    the Main Components into four parts
                -->

             @yield('content')

            @include('partials.footer')

        </main>


    </div>





</body>

</html>