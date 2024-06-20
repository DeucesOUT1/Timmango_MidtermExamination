<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="table-auto border border-gray-500 rounded-lg my-4">
    
    <div class="flex justify-center">
            <button class="rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4" onclick="location.href='{{ url('/products') }}'">Products</button>
     </div>
    </body>
</html>
