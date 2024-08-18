<form id="addDrugForm" method="POST" action="/add-drug">
    @csrf

    <!-- General error for missing fields -->
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
            <p>Please fill out the form correctly.</p>
        </div>
    @endif

    <!-- Drug ID -->
    <input type="text" name="drugId" value="{{ old('drugId') }}" placeholder="Drug ID" class="block w-full p-2 mb-4 border rounded-md">
    @error('drugId')
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror

    <!-- Name -->
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="block w-full p-2 mb-4 border rounded-md">
    @error('name')
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror

    <!-- Batch Number -->
    <input type="text" name="batchNumber" value="{{ old('batchNumber') }}" placeholder="Batch Number" class="block w-full p-2 mb-4 border rounded-md">
    @error('batchNumber')
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror

    <!-- Manufacturer -->
    <input type="text" name="manufacturer" value="{{ old('manufacturer') }}" placeholder="Manufacturer" class="block w-full p-2 mb-4 border rounded-md">
    @error('manufacturer')
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror

    <!-- Expiry Date -->
    <input type="text" name="expiryDate" value="{{ old('expiryDate') }}" placeholder="Expiry Date" class="block w-full p-2 mb-4 border rounded-md">
    @error('expiryDate')
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror

    <!-- Submit Button -->
    <button type="submit" class="block w-full bg-blue-500 text-white py-2 rounded-md">Add Drug</button>
</form>
