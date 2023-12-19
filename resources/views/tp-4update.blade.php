<h2>Update Employee</h2>

<form action="{{ route('tp4.update', $employee->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="{{ $employee->nom }}" required>

    <label for="prenom">Prenom:</label>
    <input type="text" name="prenom" value="{{ $employee->prenom }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $employee->email }}" required>

    <button type="submit">Modifier l'employé</button>
</form>

<a href="/tp-4/show">Liste d'employés</a>
