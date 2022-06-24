<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hello World!</h1>
    <h1>Ciao {{ $name }} {{ $lastname }}, al momento i membri del gruppo sono: </h1>
    <ul>
        @foreach ($members as $member)
        <li>
            <h1>{{ $member['name'] }}</h1>
            <h2>{{ $member['surname'] }}</h2>
            <h3>{{ $member['role'] }} </h3>
        </li>
        @endforeach
    </ul>
</body>

</html>