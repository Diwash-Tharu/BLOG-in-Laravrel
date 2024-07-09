<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../dashboarde.css"> -->
    </link>
    <link rel="stylesheet" href="add.css">
    <title>Document</title>
</head>

<body>
@include('navbar')
    <div class="all">
        <form method="POST" action="{{route('register.data')}}" enctype="multipart/form-data" >
            @csrf
            <label>Product Name</label>
            <input type="text" name="name" value="">
            <p class="error password-error">
      
            </p>

            <label>Product Description</label>
            <input type="text" name="product_des" value="">
            <p class="error password-error">
 
            </p>

            <label>Price</label>
            <input type="number" name="price" min="1" value=" ">
            <p class="error password-error">

            </p>

            <label>Quantity</label>
            <input type="number" name="quantity" min="1" max="100" value="">
            <p class="error password-error">

            </p>

            <label>Available Stock</label>
            <input type="text" name="stock"  value="">
            <p class="error password-error">

            </p>

            <label>Catogeory</label>
            <input type="text" name="catogery"  value="">
            <p class="error password-error">

            </p>

            <!-- <label>Allergy Info</label>
            <input type="text" name="allergy_info" value="">
            <p class="error password-error"> -->

            </p>

            <label>Image</label>
            <input type="file" name="image" placeholder="image" value="">
            <p class="error password-error">

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