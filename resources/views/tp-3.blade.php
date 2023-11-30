<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP 3</title>
</head>

<body>
    <h2>Inscription</h2>
    <form action="{{ route('tp-2.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="name" id="nom">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button>INSCRIT</button>
    </form>
</body>

</html>
