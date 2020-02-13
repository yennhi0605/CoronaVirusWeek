<?php
     $product = array(
        [
          'id' => 1,
          'name' => 'Máy lọc nước Kangraroo',
          'type' => 'Hydrogen KG100HC vỏ tủ VTU',
          'sale' => '- 24',
          'image' => 'img1.jpg',
          'newprice' => 8290000,
          'oldprice' => 11500000
        ],
        [
            'id' => 2,
            'name' => 'Máy lọc nước Kangraroo',
            'type' => 'Hydrogen KG100HC  không vỏ',
            'sale' => '- 34',
            'image' => 'img2.jpg',
            'newprice' => 5980000,
            'oldprice' => 9100000
        ],
        [
            'id' => 3,
            'name' => 'Máy lọc nước Kangraroo',
            'type' => 'Hydrogen KG100HC vỏ tủ VTU',
            'sale' => '- 33',
            'image' => 'img3.jpg',
            'newprice' => 6480000,
            'oldprice' => 9700000
        ]
    );

    function displayProduct(){
        global $product;
        for ($i = 0; $i < count($product); $i++) {
            echo '<div class="item">';
            echo ' <p><b class="pro-title">'.$product[$i]['name'].'</b></p>';
            echo '<p><b class="pro-type">'.$product[$i]['type'].'</b></p>';
            echo ' <div class="pro-sale"> '.$product[$i]['sale'].'%</div><div>';
            echo '  <img class="pro-img" src="'.$product[$i]['image'].'"></div>';
            echo ' <center class="center-price">';
            echo ' <b class="pro-newprice"><span >'.number_format($product[$i]['newprice']).'</span><ins>đ</ins></b><br>';
            echo ' <strike class="pro-oldprice"><span>'.number_format($product[$i]['oldprice']).'</span><ins>đ</ins></strike></center>';
            echo ' </div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy lọc nước</title>
    <link rel="stylesheet" href="array.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Máy lọc nước</h2>
            <hr>
        </div>
        <div class="row">
            <?php
             displayProduct();
            ?>
        </div>
    </div>
</body>
