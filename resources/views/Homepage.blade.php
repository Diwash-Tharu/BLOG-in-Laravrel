<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home1dassboar.css" />
    
    <title>Document</title>
</head>

<body>
  


    <div id="div">
        Product
    </div>

    <div class="shopitems">
       <!-- /* <?php
                    
                // include("connection.php");

                //     $sql = 'SELECT * FROM "PRODUCT" ';
                //     $stid1 = oci_parse($connection,$sql);
                //     oci_execute($stid1);
                    
                // while($row = oci_fetch_array($stid1, OCI_ASSOC)){
                //     $pid = $row['PRODUCT_ID'];
                //     $img_name=$row['PRODUCT_NAME'];
                //     echo "<a href='display_selected_prd.php?s_name=$img_name&s_id=$pid' class='single'>";
                //         echo "<div class='card_info'>";
                //             echo "<img src=\"dbimage/product/".$row['PRODUCT_IMAGE']."\" alt=".$row['PRODUCT_NAME']." >";
                //             echo "<div class='card-info'>";
                //                 echo "<div class='card-details'>";
                //                     // echo "<label>P_ID :  ".$row['PRODUCT_ID']."</label>";
                //                     echo "<label>Name:  ".substr($row['PRODUCT_NAME'],0,25)."</label>";
                //                     echo "<label>Price:  <span> &pound; ".$row['PRICE'] ."<span></label>";
                //                 echo "</div>";
                //             echo "</div>"; 
                //             // echo "<div class='btns'>";
                //             //     // echo "<a href='update.php?cat=EditProduct&id=$pid&action=edit' id='edit' ><i class='fa fa-shopping-cart' style='font-size:36px'></i></a>";
                //             //     // echo "<a href='deleteP.php?&id=$pid&action=delete' id='delete' >Wish List</a>";
                //             // echo "</div>";
                //         echo "</div>";
                //         echo "</a>";
                //     }
        // ?>
        * -->


                    
            @foreach($products as $product)
                        
                  
                        <!-- <a href='display_selected_prd.php?s_name=$img_name&s_id=$pid' class='single'> </a>;; -->
                            <div class='card_info'>
                                <!-- <img src=\"dbimage/product/".$row['PRODUCT_IMAGE']."\" alt=".$row['PRODUCT_NAME']." >; -->
                                <div class='card-info'>
                                    <div class='card-details'>
                                        <!-- // echo "<label>P_ID :  ".$row['PRODUCT_ID']."</label>"; -->
                                        <label>Name:  ".{{ $product->id }}."</label>
                                        <label>Price:  <span> &pound; ".{{ $product->name }}."<span></label>
                                    </div>
                                </div>
                                <!-- // echo "<div class='btns'>";
                                //     // echo "<a href='update.php?cat=EditProduct&id=$pid&action=edit' id='edit' ><i class='fa fa-shopping-cart' style='font-size:36px'></i></a>";
                                //     // echo "<a href='deleteP.php?&id=$pid&action=delete' id='delete' >Wish List</a>";
                                // echo "</div>"; -->
                          </div>
                           
                      
            
                @endforeach

    </div>







</body>

</html>
