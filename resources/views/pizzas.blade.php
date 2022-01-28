<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Laravel</title>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
   <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
         <h1>
            Pizzas
         </h1>
         <p>
            {{$user_first_name }} - {{$user_last_name}} - {{$user_name}} - {{$user_email}}
            @if($price > 15) <p>this pizza is expensive
            </p>
            @elseif($price < 7) <p>this pizza is cheap</p>
            @else
            <p>price is moderate</p>
            @endif
            @php
               $name='abdul basit';
               echo ($name)
            @endphp

         </p>
      </div>
   </div>
</body>

</html>