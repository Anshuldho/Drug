<!-- resources/views/success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-8">
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold text-green-600 mb-4">Success!</h1>
        <p class="text-xl mb-6">The drug was added successfully.</p>

        <!-- Display transaction details if available -->
        @if (session('transaction'))
            <p class="text-sm text-gray-700 mb-4">Transaction ID: {{ session('transaction') }}</p>
        @endif

        <p>{{ session('success') }}</p>

        <a href="/drug" class="inline-block mt-6 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
            Go Back to Home
        </a>
    </div>
</div>
</body>
</html>
