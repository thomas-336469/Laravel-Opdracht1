<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create a shop</h1>
    <form method="post" action="{{route('shop.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="name" name="name" placeholder="Name">
        </div>
        <div>
            <label>Location</label>
            <input type="name" name="location" placeholder="Location">
        </div>
        <div>
            <label>Address</label>
            <input type="name" name="address" placeholder="Address">
        </div>
        <div>
            <label>Phone</label>
            <input type="name" name="phone" placeholder="Phone">
        </div>
        <div>
            <label>Email</label>
            <input type="name" name="email" placeholder="Email">
        </div>
        <div>
            <button type="submit">Save new shop</button>
        </div>
    </form>
</body>

</html>