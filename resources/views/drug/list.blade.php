<!-- resources/views/drugs/list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Drugs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6 text-center">List of Drugs</h1>
    <table class="table-auto w-full bg-white shadow-lg rounded-lg">
        <thead>
        <tr class="bg-gray-200">
            <th class="px-4 py-2">Drug ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Distributor</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($drugs as $drug)
            <tr>
                <td class="border px-4 py-2">{{ $drug->id }}</td>
                <td class="border px-4 py-2">{{ $drug->name }}</td>
                <td class="border px-4 py-2">{{ $drug->distributor }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form action="{{ route('deleteDrug', $drug->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this drug?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
            Delete
        </button>
    </form>

</div>
</body>
</html>
