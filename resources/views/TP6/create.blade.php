<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Form</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white rounded p-6">
        <h2 class="text-2xl font-semibold mb-6">Project Details</h2>
        <form action="{{ route('TP6.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nom" class="block text-gray-600 text-sm font-medium mb-2">Project</label>
                <input type="text" id="nom" name="nom"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter project name" required>
            </div>
            <div class="mb-4">
                <label for="employee" class="block text-gray-600 text-sm font-medium mb-2">Attribuer les
                    employés</label>
                <select id="employee" name="employees[]"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required
                    multiple>
                    @if (!empty($employees))
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->nom }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-6">
                <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
                <textarea id="description" name="description"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter project description" rows="4" required></textarea>
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
