<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'employé</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Modifier l'employé</h2>

        <form action="{{ route('tp5.update', $employee->id) }}" method="post" enctype="multipart/form-data"
            class="max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                <input type="text" name="nom" value="{{ $employee->nom }}" id="nom"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" value="{{ $employee->email }}" id="email"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="number" name="phone" value="{{ $employee->phone }}" id="phone"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="section" class="block text-gray-700 text-sm font-bold mb-2">Section</label>
                <input type="text" name="section" value="{{ $employee->section }}" id="section"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">
                    <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Image"
                        class="w-32 h-32 object-cover mb-2">
                </label>
                <input type="file" name="image" accept="image/*" id="image"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Modifier
                </button>
            </div>
        </form>

        <a href="/tp-5/show" class="text-blue-500">Liste d'employés</a>
    </div>

</body>

</html>
