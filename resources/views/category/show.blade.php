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
    <fieldset>
        <legend>
            Category
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Back</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('category.index') }}">Back</a></td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>
            Category products
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>

</html>
