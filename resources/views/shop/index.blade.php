<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Shop</h3>
    <div>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Edit</th>
            </tr>
            @foreach($shop as $shops)
            <tr>
                <td>{{$shops->id}}</td>
                <td>{{$shops->name}}</td>
                <td>{{$shops->location}}</td>
                <td>{{$shops->address}}</td>
                <td>{{$shops->phone}}</td>
                <td>{{$shops->mail}}</td>
                <td>
                    <a href="{{route('shop.edit', ['shop' => $shops])}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>