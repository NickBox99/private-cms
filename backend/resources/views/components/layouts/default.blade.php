<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/js/app.js'])
</head>
<body class="d-flex vh-100">
    <x-sidebar/>

    <div class="flex-grow-1 d-flex flex-column">
        <x-navbar/>

        <div class="flex-grow-1 p-2">
            <div class="h-100 bg-dark rounded p-2 d-flex flex-column">{{ $slot }}</div>
        </div>
    </div>
    
</body>
</html>