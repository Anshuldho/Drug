<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">List of Drugs</h1>

    @if($drugs->isEmpty())
        <p class="text-gray-600 text-center">No drugs available.</p>
    @else
        <ul class="space-y-4">
            @foreach ($drugs as $drug)
                <li class="p-4 bg-blue-50 rounded-lg shadow-md flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-700">{{ $drug->name }}
                            <span class="text-sm text-gray-500">({{ $drug->drugId }})</span>
                        </h2>
                    </div>

                    <!-- Delete Button/Form -->
                    <form action="{{ route('deleteDrug', $drug->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this drug?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
