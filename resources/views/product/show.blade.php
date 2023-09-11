<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Availability</th>
                <th>Category Name</th>
                <th>Back</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->availability }}</td>
                <td>{{ $product->category->name }}</td>
                <td><a href="{{ route('product.index') }}">Back</a></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
