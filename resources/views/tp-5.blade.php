<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP 5</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center h-screen items-center">
    <div class="max-w-md bg-white px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-4">Ajout d'employées</h2>

        <form action="{{ route('tp5.store') }}" method="POST" enctype="multipart/form-data"
            class="max-w-md bg-white rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                <input type="text" name="nom" id="nom"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="number" name="phone" id="phone"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="section" class="block text-gray-700 text-sm font-bold mb-2">Section</label>
                <input type="text" name="section" id="section"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" accept="image/*" id="image"
                    class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</body>

</html>
