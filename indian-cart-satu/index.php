<?php
require_once('php/createDb.php');
require_once('./php/component.php');

//create instance of createdb class
$database = new CreateDb("productdb","Producttb");

echo("hello");

?>

<!DOCTYPE html>
<html>
<head>
	<title>shopping cart</title>

<!-- Font Awesome -->
<!-- catatan ini versi yang lama dari cdnjs yang terbaru 5.9.0 pertanggal 22 agustus 2019 -->
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">


<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 --><!-- bootstrap cdn -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- css -->
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="container">
		<div class="row text-center py-5" >
			<!-- gambar-1 -->
			<?php
				// component(productName:"Product 1",productPrice:599,productImg:"upload/image-1.png");

				// component("Product 2",99,"upload/image-2.png");

				// component("Product 3",5199,"upload/image-3.png");

			$result=$database->getData();
			while ($row = mysqli_fetch_assoc($result)) {
				# code...
				component($row['product_name'],$row['product_price'],$row['product_image']);
			}


				
			?>
		</div>
			
			<!-- gambar-4 -->
		</div>
	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>