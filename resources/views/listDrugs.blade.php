<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug List</title>
</head>
<body>
<h1>List of Drugs</h1>

@if($drugs->isEmpty())
    <p>No drugs available.</p>
@else
    <ul>
        @foreach ($drugs as $drug)
            <li>{{ $drug->name }} ({{ $drug->drugId }})</li>
        @endforeach
    </ul>
@endif

</body>
</html>

