<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6">Drug List</h1>

    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table of drugs -->
    <table class="min-w-full bg-white shadow-md rounded">
        <thead>
        <tr>
            <th class="py-3 px-6 bg-blue-500 text-white">Drug ID</th>
            <th class="py-3 px-6 bg-blue-500 text-white">Name</th>
            <th class="py-3 px-6 bg-blue-500 text-white">Batch Number</th>
            <th class="py-3 px-6 bg-blue-500 text-white">Manufacturer</th>
            <th class="py-3 px-6 bg-blue-500 text-white">Expiry Date</th>
            <th class="py-3 px-6 bg-blue-500 text-white">Distributor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($drugs as $drug)
            <tr>
                <td class="py-3 px-6 border">{{ $drug->drugId }}</td>
                <td class="py-3 px-6 border">{{ $drug->name }}</td>
                <td class="py-3 px-6 border">{{ $drug->batchNumber }}</td>
                <td class="py-3 px-6 border">{{ $drug->manufacturer }}</td>
                <td class="py-3 px-6 border">{{ $drug->expiryDate }}</td>
                <td class="py-3 px-6 border">{{ $drug->distributor ?? 'Not updated' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
