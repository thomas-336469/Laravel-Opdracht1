<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit a shop</h1>
    <form method="post" action="">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="name" name="name" placeholder="Name" value="{{$shop->name}}">
        </div>
        <div>
            <label>Location</label>
            <input type="name" name="location" placeholder="Location" value="{{$shop->location}}">
        </div>
        <div>
            <label>Address</label>
            <input type="name" name="address" placeholder="Address" value="{{$shop->address}}">
        </div>
        <div>
            <label>Phone</label>
            <input type="name" name="phone" placeholder="Phone" value="{{$shop->phone}}">
        </div>
        <div>
            <label>Email</label>
            <input type="name" name="email" placeholder="Email" value="{{$shop->email}}">
        </div>
        <div>
            <button type="submit">Update shop</button>
        </div>
    </form>
</body>

</html>