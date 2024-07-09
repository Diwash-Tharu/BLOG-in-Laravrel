<div>
    <!-- Well begun is half done. - Aristotle -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('home1dassboar.css') }}">
    
    <title>Document</title>
</head>

<body>
  @include('navbar')

    <div id="div">
      Edit Page
    </div>

    <div class="more">
   

                    
            @foreach($products as $product)
                        
                        <a href="{{route('product.view', $product->id) }}">
                        <!-- <a href='display_selected_prd.php?s_name=$img_name&s_id=$pid' class='single'> </a>;; -->
                            <div class='card_info'>
                            <!-- <img src="{{ asset('upload/images/' . $product->image) }}" alt="{{ $product->image }}"> -->

                                <img src="{{asset('upload/images/'.$product->image)}}" alt="{{$product->image}}" >
                                <div class='card-info'>
                                    <div class='card-details'>
                                        <!-- // echo "<label>P_ID :  ".$row['PRODUCT_ID']."</label>"; -->
                                        <label>Product ID:  {{ $product->id }}</label>
                                        <label>Prdouct Name:  <span>{{ $product->Pname }}<span></label>
                                    </div>
                                </div>
                                <div class='btns'>
                                    <a href=""><i class='fa fa-edit' style='font-size:36px'></i>Edit</a>
                                    <!-- <a href="" id='delete' >Delete</a> -->

                                    <form  action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="delete"   id='delete' style="border: none; background-color:transparent; text-decoration:none;">
                                    <i class="fas fa-trash fa-lg text-danger">Delete</i>
                                </button>

                                </div>
                            </div>
                        </a>
                      
            
                @endforeach

    </div>







</body>

</html>
