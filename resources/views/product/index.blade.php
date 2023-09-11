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
    <a href="{{ route('product.create') }}">Add Product</a>
    <a href="{{ route('category.index') }}">Categories</a>
    <a href="{{ route('order.index') }}">Orders</a>

    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Availability</th>
                <th>Category Name</th>
                <th>Show</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->availability }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <form action="{{ route('product.show', $product->id) }}" method="get">
                            <button>Show</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('product.edit', $product->id) }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
