<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body class="h-100">
<!--
                       ::=
                    .:::.=:
                   ::::::==
                  -:-::--=--
                 -.:--:--+=+
                =.:-:---=+-+:
               -::----:-++===
               =:--==++=+*==+.
              -=++===*+====++*=.
             -**++===+==+++**++++:
           :+++:     :+====*===*+=+.
          =*++  :+##+. +-::....===*+=--::::.
         -***- :@@@@@%.=       =++*+========+++==-:
      .  =:-== -@@@@@@.-       -==+*==*======-::..-:
     ...-:   .: =%@@%-.-       -==*+==+---::::::.::
    .. .=...  .::... .:        -==+===++--::::..::
      ..--.::.   ::::.     .::::-=+==*++----:..-.
         -..::.  .    -. .::+%@@*:.=+==+---:::-.
         -.  .   -  .    - =@@@@@%  +==+-:::-:
          +       ::=    - -@@@@@#  ====--::
         -*=.       .:   :: -*%#+. .*++-:
         **:-:        :.  .:.     :==*:
        =*:  .-:       ..:. :++==+==+-
       .#.     .--.     ::::.-+*++++:
       =*         ::::.  .::..::++:
       **             :::::--=-::.
      :*=                   .=..
     .++-                   .-.       =*.
     +*+-        .          --       .**-
    =++**       -   :.      +*-     .***:
    *++*+.      -   .:     .=+*   .-+=*+
    *+++=:      -   .:     :+**==+++*+=.
    =+++:-     :.   .-     -=+**+**=*=.
    .++-:=     -    .-     --+#**++-.
     .+. -     - :-:.-     - :-.
      --:-     :=.  --     ---.
        --  . ..:   .-.  . :-
         :::-:-:     .-::-::
-->

    @yield('content')

    @stack('js')
</body>
</html>
