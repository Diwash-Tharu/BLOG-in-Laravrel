<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="home1dassboar.css" /> -->
    <link rel="stylesheet" href="{{ asset('home1dassboar.css') }}">
    <title>Document</title>
</head>

<body>
  @include('navbar')

<div class="editall">
            <div class="edit1">
                <a href="{{route('register')}}" class="btn">Add Product</a>
            </div>
            <div class="edit2">
                <a href="{{route('product.edit.delete')}}" class="btn">Edit Product/ Delete Product</a>
            </div>
           
</div>

    <div id="div">
        News Blogs
    </div>

    <div class="more">    
            @foreach($products as $product)
                        
                        <a href="{{route('product.view', $product->id) }}">
                            <div class='card_info'>
                                <img src="{{asset('upload/images/'.$product->image)}}" alt="{{$product->image}}" >
                                <div class='card-info'>
                                    <div class='card-details'>
                                        <label>Name:  {{ $product->Pname }}</label>
                                        <label> <b> Title: </b> <span id="Title">  {{ $product->Title }}<span></label>
                                        <label> <b> ID: </b> <span id="Title">  {{ $product->id }}<span></label>

                                    </div>
                                </div>
                            </div>
                        </a>
                @endforeach

    </div>
</body>

</html>
