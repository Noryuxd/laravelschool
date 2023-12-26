<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 ">
    <div class="container mx-auto mt-8 ">
        <table class="w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Section</th>
                    <th class="py-2 px-4 border-b">Image</th>
                    <th class="py-2 px-4 border-b">Projets</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $employee->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $employee->section }}</td>
                        <td class="py-2 px-4 border-b">
                            <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image"
                                class="w-16 h-16">
                        </td>
                        <td class="py-2 px-4 border-b">
                            @foreach ($employee->projets as $projet)
                                {{ $projet->nom }}<br>
                            @endforeach
                        </td>
                        <td class="py-2 px-4 border-b">
                            <form method="POST" action="{{ route('tp5.destroy', $employee->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                            <a href="{{ route('tp5.update', ['employee' => $employee->id]) }}"
                                class="ml-2 text-blue-500">
                                <button class="bg-blue-500 text-white py-1 px-2 rounded">Update</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="/tp-5" class="text-blue-500">Ajouter un employee</a>
        </div>
        <div class="mt-4">
            <a href="/TP6/create" class="text-blue-500">Ajouter un nouveau projet</a>
        </div>
        <div class="mt-4">
            {{ $employees->links() }}
        </div>
    </div>
</body>

</html>
