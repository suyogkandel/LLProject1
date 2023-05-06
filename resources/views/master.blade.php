<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITLE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-blue-600 p-4 text-white text-right px-24">
        <a href="/" class="font-bold text-lg mx-4">Home</a>
        <a href="/about" class="font-bold text-lg mx-4">About</a>
        <a href="" class="font-bold text-lg mx-4">Contact</a>
        <a href="" class="font-bold text-lg mx-4">Login</a>
    </nav>

    @yield('content')

    <footer class="bg-gray-800 text-white p-4 mt-4 flex justify-between px-36">
        <span>All Rights Reserved</span>
        <span>Powered By BITs</span>
    </footer>
</body>
</html>