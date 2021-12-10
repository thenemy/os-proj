<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Whack a mole</title>
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@2.3.0/dist/socket.io.slim.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- Fonts -->

    <!-- CSS only -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="w-full h-screen bg-cover font-mono bg-main-back "
      style="background-image: url({{asset('images/3.png')}})"
>

{{--<x-auth.authorization/>--}}

{{--<x-auth.registration/>--}}
<x-game.create_join_game/>
{{--<div>--}}
{{--        <x-game.create_join_game />--}}
{{--</div>--}}

<x-game.games_list />

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.socket.io/4.0.1/socket.io.min.js"
        integrity="sha384-LzhRnpGmQP+lOvWruF/lgkcqD+WDVt9fU3H4BWmwP5u5LTmkUGafMcpZKNObVMLU"
        crossorigin="anonymous"></script>
<x-test.chat />

<script>
    $(function () {
        let ip_address = '127.0.0.1';
        let socket_port = '3000';
        let socket = io(ip_address + ':' + socket_port);

        let chatInput = $('#chatInput');

        chatInput.keypress(function (e) {
            let message = $(this).html();
            console.log(message);
            if (e.which === 13 && !e.shiftKey) {
                socket.emit('sendChatToServer', message);
                chatInput.html('');
                return false;
            }
        });

        socket.on('sendChatToClient', (message) => {
            $('.chat-content ul').append(`<li>${message}</li>`);
        });
    });
</script>
</body>
</html>

<script>
    const cards = document.querySelectorAll('.card');

    [...cards].forEach((card) => {
        card.addEventListener('click', function () {
            card.classList.toggle('is-flipped');
        });
    });
</script>
