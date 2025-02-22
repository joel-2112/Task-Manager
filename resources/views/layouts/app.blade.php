<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">
    <div class="container mx-auto p-6 ">
        @yield('content')
    </div>
</body>
</html>