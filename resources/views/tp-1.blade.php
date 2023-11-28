<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tp-1</title>
</head>
<body>
    <form action="/tp-1" method="POST">
        @csrf
        <label for="value">valuer</label>
        <input type="text" name="value" id="value">
        <button>submit</button>
    </form>
    @isset($value)
        <h1>{{ $value }}</h1>
    @endisset
</body>
</html>
