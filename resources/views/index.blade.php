<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="max-w-2xl mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
        @forelse ($profile as $profile)
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-900">Halo, {{ $profile->nama }}</h1>
            <p class="mt-4 text-gray-600">Email: {{ $profile->email }}</p>
        </div>
        @empty

        @endforelse
    </div>
</body>

</html>
