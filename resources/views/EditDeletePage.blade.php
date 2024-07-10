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
             
                            <div class='card_info'>
                 

                                <img src="{{asset('upload/images/'.$product->image)}}" alt="{{$product->image}}" >
                                <div class='card-info'>
                                    <div class='card-details'>
                                      
                                        <label>Product ID:  {{ $product->id }}</label>
                                        <label>Prdouct Name:  <span>{{ $product->Pname }}<span></label>
                                    </div>
                                </div>
                                <div class='btns'>
                                <a href="{{route('product.edit',$product->id )}}"><i class='fa fa-edit' style='font-size:36px'></i>Edit</a>
                                
                                <form action="{{ route('products.delete', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="delete" style="border: none; background-color: transparent; cursor: pointer;">
                                    <i class="fas fa-trash fa-lg text-danger">Delete</i>
                                </button>
                            </form>

                                </div>
                            </div>
                        </a>
                @endforeach

    </div>







</body>

</html>
