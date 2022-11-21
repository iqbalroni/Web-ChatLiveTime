<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    {{-- <title>Belajar Bikin Aplikasi Nihh | Gabut Ga NGotak</title> --}}
    <title></title>
    <script type="text/javascript">
        message = " Belajar Bikin Aplikasi Nihh | Gabut Ga NGotak |";

        function step() {
            message = message.substr(1) + message.substr(0, 1);
            document.title = message.substr(0, 15);
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
    <link rel="stylesheet" href="{{ asset('template') }}/style.css">
    @livewireStyles
</head>

<body onload="setInterval(step,200)">

    <livewire:index-chat>

        @livewireScripts
        <!-- partial -->
        <script src="{{ asset('template') }}/script.js"></script>

</body>

</html>
