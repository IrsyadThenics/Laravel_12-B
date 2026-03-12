<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-600">MyBrand</a>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-500">Home</a>
                <a href="/about" class="hover:text-blue-500">About</a>
                <a href="/contact" class="hover:text-blue-500">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 p-4">
        @yield('content')
    </main>

    <footer class="text-center mt-20 p-6 text-gray-500 border-t">
        &copy; 2026 MyBrand. Dibuat dengan Laravel.
    </footer>
</body>
</html>