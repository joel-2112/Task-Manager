<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    @vite('resources/css/app.css')  {{-- Ensure Tailwind is included --}}
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-100">Welcome to My Laravel App</h1>
        <p class="text-gray-700 mt-2">This is a customized Tailwind-powered page.</p>
    </div>
</body>
</html>
