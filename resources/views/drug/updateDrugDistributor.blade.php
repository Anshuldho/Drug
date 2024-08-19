<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Drug Distributor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="container mx-auto p-6">
    <div class="bg-white p-10 shadow-2xl rounded-xl mb-10 transform hover:scale-105 transition-transform duration-500">
        <h2 class="text-4xl font-semibold mb-8 text-yellow-700 text-center">Update Drug Distributor</h2>
        <form id="updateDrugDistributorForm" method="POST" action="{{ route('updateDrugDistributor') }}">
            @csrf
            <input type="text" name="drugId" placeholder="Drug ID"
                   class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-300">
            <input type="text" name="newDistributor" placeholder="New Distributor"
                   class="block w-full p-4 mb-6 border border-gray-400 rounded-lg focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-300">
            <button type="submit"
                    class="block w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-white py-4 rounded-lg hover:opacity-90 transition-opacity duration-300">
                Update Distributor
            </button>
        </form>
    </div>
</div>
</body>

</html>
