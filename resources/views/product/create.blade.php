<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Entre product name">
        <input type="text" name="price" placeholder="Entre product price">
        <input type="text" name="availability" placeholder="Entre product availability">
        <input type="text" name="category_id" placeholder="Entre product category id">
        <input type="submit">
    </form>
</body>

</html>
