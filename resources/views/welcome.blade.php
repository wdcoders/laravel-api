<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Laravel Api</h2>

    <table>
        <thead>
            <tr>
                <td>Category Name</td>
                <td>Category Slug</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat)
                <tr>
                    <td>{{ $cat->cat_name }}</td>
                    <td>{{ $cat->cat_slug }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
