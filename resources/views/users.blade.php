<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
    {{-- $array[0]
    $json->name --}}
    @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach
</body>

</html>