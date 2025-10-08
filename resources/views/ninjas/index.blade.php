<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ninja Network</title>
    </head>

    <body>
        {{--  $ variables is passed from the route --}}
        <p>{{ $greetings }} Ninjas</p>
        <p>All Ninjas will be listed here</p>
        <ul>
            @foreach ($ninjas as $ninja)
                <li>
                    <a href="/ninjas/{{ $ninja['id'] }}">
                        {{ $ninja['name'] }} - {{ $ninja['age'] }} years old
                    </a>
                </li>
            @endforeach
        </ul>
    </body>

</html>
