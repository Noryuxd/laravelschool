<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-center border-b">Titre</th>
                    <th class="py-2 px-4 text-center border-b">Etat</th>
                    <th class="py-2 px-4 text-center border-b">Employé</th>
                    <th class="py-2 px-4 text-center border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taches as $tache)
                    <tr>
                        <td class="py-2 px-4 text-center border-b">{{ $tache->titre }}</td>
                        <td class="py-2 px-4 text-center border-b">{{ $tache->etat }}</td>
                        <td class="py-2 px-4 text-center border-b">
                            @foreach ($tache->employees as $employee)
                                {{ $employee->nom }}
                            @endforeach
                        </td>

                        <td class="py-2 px-4 text-center border-b flex justify-center items-center gap-2">
                            <a href="{{ route('tache.edit', $tache->id) }}"
                                class="border p-3 text-white bg-blue-500">Modifier</a>
                            <form action="{{ route('tache.destroy', $tache->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a type="submit" class="border p-3 text-white bg-red-500">Supprimer</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="{{ route('tache.create') }}" class="bg-blue-500 text-white p-2">Ajouter une nouvelle tache</a>
        </div>
    </div>
</body>

</html>
