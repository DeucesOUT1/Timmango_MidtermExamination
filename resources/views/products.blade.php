<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <body class="flex justify-center items-center h-screen">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-center mb-4">Books</h1>
            <table class="table-auto border border-gray-500 rounded-lg my-4">
                <thead>
                    <tr>
                        <th class="border border-gray-500 px-4 py-2">Title</th>
                        <th class="border border-gray-500 px-4 py-2">Author</th>
                        <th class="border border-gray-500 px-4 py-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="border border-gray-500 px-4 py-2">{{ $product['title'] }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $product['author'] }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $product['price'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <div class="flex justify-center">
                    <button class="rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4" onclick="location.href='{{ url('/') }}'">Home</button>
                 </div>
            </div>
</body>
</html>