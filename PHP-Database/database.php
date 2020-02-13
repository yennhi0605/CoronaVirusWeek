<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "CoronaVirus";
	$db = new mysqli($servername, $username, $password, $database);

	function displayProduct(){
	    global $db;   
	    $sql = "SELECT * FROM Product";
	    $result = $db->query($sql);
	    while ($product = $result->fetch_assoc()) {
	        echo '<div class="item">';
	        echo ' <p><b class="pro-title">'.$product['name'].'</b></p>';
	        echo ' <p><b class="pro-type">'.$product['type'].'</b></p>';
	        echo ' <div class="pro-sale"> '.$product['sale'].'</div><div>';
	        echo '  <img class="pro-img" src="'.$product['img'].'"></div>';
	        echo ' <center class="center-price">';
	        echo ' <b class="pro-newprice"><span >'.number_format($product['price']).'</span><ins>đ</ins></b><br>';
	        echo ' <strike class="pro-oldprice"><span>'.number_format($product['oldprice']).'</span><ins>đ</ins></strike></center>';
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
    <link rel="stylesheet" href="database.css">
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
