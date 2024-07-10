<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ayee LMAO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .background-img {
                height: 100vh
            }
            .squid {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
          
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <form action="/weather" method="post">
            @csrf <!-- {{ csrf_field() }} -->

        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        {{-- <input type="text" placeholder="zip"></input> --}}

        <button type="submit" >search</button>

        @if ($data)
        @php
            $decoded = json_decode($data);
            $current = $decoded->current;
            // dd($decoded);
        @endphp

        @foreach ($current as $key => $value)
            
        @php
            // dd($key , $value);
        @endphp
            <p>{{$key}} </p> <p>{{$value}} </p> </br>
        @endforeach
     
            {{-- {{ $encoded }} --}}
            {{-- {{ json_decode($data, true) }} --}}
        @endif
        </div>
    </form>

    </body>
</html>
