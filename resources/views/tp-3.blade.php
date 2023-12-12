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
    <form action="/tp-3" method="POST">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button>S'inscrire</button>
    </form>
</body>

</html>
