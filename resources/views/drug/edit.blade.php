<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Message</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Message</h1>

    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $message->name) }}" required>
            @error('name')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $message->number) }}" required>
            @error('phone')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message">{{ old('message', $message->message) }}</textarea>
            @error('message')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>

    <a href="{{ route('messages.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-md">Back to List</a>
</div>
</body>
</html>
