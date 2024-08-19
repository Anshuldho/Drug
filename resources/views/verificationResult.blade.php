<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-200 via-white to-teal-100 min-h-screen flex items-center justify-center p-6">
<div class="max-w-lg mx-auto bg-white p-10 rounded-xl shadow-xl text-center transform hover:scale-105 transition-transform duration-300">

    <!-- Check if the drug is matched -->
    @if($result === 'yes')
        <div class="text-green-600 mb-6 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.293-4.707a1 1 0 011.414 0l3-3a1 1 0 00-1.414-1.414l-2.293 2.293L8.707 8.293a1 1 0 00-1.414 1.414l2 2z" clip-rule="evenodd" />
            </svg>
            <h1 class="text-4xl font-bold">Drug ID Matched!</h1>
            <p class="text-lg text-gray-600 mt-2">The drug is verified successfully.</p>
        </div>
    @else
        <div class="text-red-600 mb-6 animate-pulse">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1.293-11.707a1 1 0 00-1.414-1.414L8 8.586 6.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <h1 class="text-4xl font-bold">No Match Found!</h1>
            <p class="text-lg text-gray-600 mt-2">The drug ID does not match our records.</p>
        </div>
    @endif

    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="mt-8 inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-teal-500 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition-opacity duration-300">
        Go Back
    </a>
</div>
</body>
</html>
