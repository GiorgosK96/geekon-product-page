<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekOn - Προϊόν</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white text-black font-sans">
    @include('components.header')
    @include('components.product-info')
    @include('components.product-card')
    @include('components.newsletter')
    @include('components.footer')
</body>
</html>
