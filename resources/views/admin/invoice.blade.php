<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <center>

        <h3>Customer name : {{$data->name}}</h3>

        <h3>Address : {{$data->rec_address}}</h3>

        <h3>Phone Number : {{$data->phone}}</h3>

        <h2>Product title : {{$data->product->title}}</h2>

        <h2>Product price : {{$data->product->price}}</h2>


    </center>

</body>
</html>