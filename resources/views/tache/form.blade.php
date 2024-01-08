<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body class="bg-gray-100">
    @php
        $is_update = isset($tache);
    @endphp
    <form action="{{ $is_update ? route('tache.update', $tache->id) : route('tache.store') }}" method="post"
        class="bg-white p-4 rounded shadow-md mx-auto mt-8 max-w-md" enctype="multipart/form-data">
        @csrf
        @if ($is_update)
            @method('PUT')
        @endif
        <div class="mb-4">
            <label for="titre" class="block text-gray-600 font-semibold">Titre</label>
            <input type="text" id="titre" name="titre" value="{{ $is_update ? $tache->titre : old('titre') }}"
                class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500">
            @error('titre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-600 font-semibold">Description</label>
            <textarea type="text" id="description" name="description"
                class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500">{{ $is_update ? $tache->description : old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="employees" class="block text-gray-600 font-semibold">Employees</label>
            <select name="employees[]" id="employees" multiple
                class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500">
                @php
                    if (isset($project)) {
                        $assignedEmployees = $project
                            ->employees()
                            ->pluck('employees.id')
                            ->toArray();
                    }
                @endphp
                @isset($record)
                    @foreach ($employees as $employee)
                        <option @selected(in_array($employee->id, $assignedEmployees)) value="{{ $employee->id }}">{{ $employee->nom }}</option>
                    @endforeach
                @else
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->nom }}</option>
                    @endforeach
                @endisset
            </select>
            @error('employees')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="etat" class="block text-gray-600 font-semibold">Etat</label>
            <select id="etat" name="etat"
                class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500">
                <option value="en cours" @selected($is_update && $tache->etat == 'en cours')>En cours</option>
                <option value="terminer" @selected($is_update && $tache->etat == 'terminer')>Terminer</option>
            </select>
            @error('etat')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button class="bg-blue-500 mt-3 text-white font-bold py-2 px-4 rounded">
            {{ $is_update ? 'Modifier' : 'Ajouter' }}
        </button>
    </form>
</body>

</html>
