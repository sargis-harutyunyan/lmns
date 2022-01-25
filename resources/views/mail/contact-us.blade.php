<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div>
            <ul>
                <li>Name - {{ $data['name'] }}</li>
                <li>Email - {{ $data['email'] }}</li>
                <li>Phone - {{ $data['phone'] }}</li>
                <li>Address - {{ $data['address'] }}</li>
                <li>Company - {{ $data['company'] }}</li>
                <li>Message - {{ $data['message'] }}</li>
            </ul>
        </div>
    </body>
</html>
