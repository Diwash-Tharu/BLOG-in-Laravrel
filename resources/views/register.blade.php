<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </link>

    <link rel="stylesheet" href="{{asset('add.css')}}">
    <title>Document</title>
</head>

<body>

@include('navbar')

    <div class="all">

   
        <form method="POST" action="{{route('register.data')}}" enctype="multipart/form-data" >
            @csrf

            @if (Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif

                                        @if (Session::has('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session::get('error') }}
                                            </div>
                                        @endif
            <label>Product Name</label>
            <input type="text" name="name"   class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            <p class="error password-error">
            @error('name')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
      
            </p>

            <label>Product Description</label>
            <input type="text" name="product_des" class="form-control @error('product_des') is-invalid @enderror" value="{{old('product_des')}}">
            <p class="error password-error">
            @error('product_des')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </p>

          
            <label>Title</label>
            <input type="text" name="Title" class="form-control @error('Title') is-invalid @enderror" value="{{old('product_des')}}">
            <p class="error password-error">
            @error('Title')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror

            <label>Catogeory</label>
            <input type="text" name="catogery" class="form-control @error('catogery') is-invalid @enderror"  value="{{old('product_des')}}">
            <p class="error password-error">
            @error('catogery')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </p>


            </p>

            <label>Image</label>
            <input type="file" name="image" placeholder="image"class="form-control @error('image') is-invalid @enderror"  value="{{old('product_des')}}">
            <p class="error password-error">
            @error('image')
                <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </p>

            <input type="submit" name="sub" value="ADD PRODUCT" class="sub">
            <form>
    </div>
    <script type="text/javascript" src="ajaxWork.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>