<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-gray-200 to-gray-400">
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-6xl font-bold text-gray-900">Drug Verification System</h1>
        <!-- Text-based List -->
        <div class="relative">
            <a href="/listDrugs" target="_blank" class="text-3xl text-gray-700 font-semibold">
                List
            </a>

        </div>
    </div>
    <!-- Add Drug Form -->
    <div class="bg-white p-10 shadow-2xl rounded-xl mb-10 transform hover:scale-105 transition-transform duration-500">
        <h2 class="text-4xl font-semibold mb-8 text-blue-800 text-center">Add a Drug</h2>
        <form id="addDrugForm" method="POST" action="{{ route('addDrug') }}">
            @csrf
            <input type="text" name="drugId" placeholder="Drug ID" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
            <input type="text" name="name" placeholder="Name" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
            <input type="text" name="batchNumber" placeholder="Batch Number" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
            <input type="text" name="manufacturer" placeholder="Manufacturer" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
            <input type="date" name="expiryDate" placeholder="Expiry Date" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-600 focus:ring-2 focus:ring-blue-300">
            <button type="submit" class="block w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-4 rounded-lg hover:opacity-90 transition-opacity duration-300">
                Add Drug
            </button>
        </form>
    </div>
    <!-- Update Drug Distributor Form -->
    <div class="bg-white p-10 shadow-2xl rounded-xl mb-10 transform hover:scale-105 transition-transform duration-500">
        <h2 class="text-4xl font-semibold mb-8 text-yellow-700 text-center">Update Drug Distributor</h2>
        <form action="{{ route('updateDistributor') }}" method="POST">
            @csrf

            <!-- Drug ID Input -->
            <div class="mb-4">
                <label for="drugId" class="block text-gray-700 font-medium mb-2">Drug ID</label>
                <input type="text" name="drugId" id="drugId" placeholder="Enter Drug ID"
                       class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
            </div>

            <!-- New Distributor Input -->
            <div class="mb-4">
                <label for="newDistributor" class="block text-gray-700 font-medium mb-2">New Distributor</label>
                <input type="text" name="newDistributor" id="newDistributor" placeholder="Enter New Distributor"
                       class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-white py-3 rounded-lg hover:bg-yellow-600 transition-all duration-300">
                Update Distributor
            </button>
        </form>
    </div>
{{--    <!-- Delete Drug Form -->--}}
{{--    <div class="bg-white p-10 shadow-2xl rounded-xl mb-10 transform hover:scale-105 transition-transform duration-500">--}}
{{--        <h2 class="text-4xl font-semibold mb-8 text-red-700 text-center">Delete a Drug</h2>--}}
{{--        <form id="deleteDrugForm" method="POST" action="/api/delete-drug">--}}
{{--            <input type="text" name="drugId" placeholder="Drug ID" class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-300">--}}
{{--            <button type="submit" class="block w-full bg-gradient-to-r from-red-500 to-pink-500 text-white py-4 rounded-lg hover:opacity-90 transition-opacity duration-300">--}}
{{--                Delete Drug--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}


    <!-- Verify Drug Form -->
    <div class="bg-white p-10 shadow-2xl rounded-xl transform hover:scale-105 transition-transform duration-500">
        <h2 class="text-4xl font-semibold mb-8 text-green-700 text-center">Verify a Drug</h2>
        <form action="{{ route('verifyDrug') }}" method="GET">
            @csrf
            <div class="mb-4">
                <label for="drugId" class="block text-gray-700 font-medium mb-2">Drug ID</label>
                <input type="text" name="drugId" id="drugId" placeholder="Enter Drug ID"
                       class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent">
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-teal-500 text-white py-3 rounded-lg hover:bg-green-600 transition-all duration-300">
                Verify Drug
            </button>
        </form>
    </div>
</div>
</body>
</html>
