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
    <a href="{{ route('product.index') }}">Products</a>

    <table>
        <thead>
            <tr>
                <th>Order Price</th>
                <th>User Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->user->name }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
