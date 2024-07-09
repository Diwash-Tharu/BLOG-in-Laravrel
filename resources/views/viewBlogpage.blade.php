<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('display_selected_prods.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Display Select Product</title>
</head>
<body class='all'>


@include('navbar')
    

<div class="card_info">
    <div class="imgsize">
        <div class="img">
            <img src="{{asset('upload/images/'.$product->image)}}" alt="{{ $product->Pname }}" >
        </div>

    </div>

    <div class="tilte">
    <label>Product Name:  {{ $product->Pname }}</label>
    </div>

    <div class="tilte2">
    <label><u>{{ $product->Title }} </u> </label>
    </div>

    <div class="disc">

    <label>Product Description:  {{ $product->Pdescription }}</label>
    </div>
    
    </div>
</body>
</html>