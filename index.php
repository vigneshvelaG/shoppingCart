<?php
    session_start();
   
$dbhost = "localhost";
$dbdatabase = "grocery";
$dbuser = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase);
    if(isset($_GET['logout'])) {
        session_destroy();
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<div class="super_container">
	<header class="header">
		<div class="top_bar">
			<div class="container">
				<div class="row">
					
							<div class="top_bar_user">
								<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
								<div><a href="register.php">Register</a></div>
								<div><a href="login.php">Sign in</a></div>
							</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">Sok</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>


							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
										<div class="cart_count"><span>0</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">Rs 0</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							

							<!-- Main Nav Menu -->

							<div class="main_nav_menu">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="mainminipro.html">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs"><a href="grocery.html">Grocery<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs"><a href="neww.html">Fruits<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="vegneww.html">Vegetables<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="meat.html">Meat<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="dairy.html">Dairy Product<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
</div>
</head>
<body >
  <br><br><br><!--
    <div class="product-list">
      <div class="product2">
        <h3>Chicken</h3>
        <img src="chic.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
       <br><br><p>Price: Rs 160.00</p>
        <div class="quantity">
          <label for="quantity-apple">Quantity:</label>
          <input type="number" id="quantity-apple" name="quantity-apple" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <div class="product">
        <h3>Fish</h3>
        <img src="fish.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
        <br><br><p>Price: Rs 200.00</p>
        <div class="quantity">
          <label for="quantity-banana">Quantity:</label>
          <input type="number" id="quantity-banana" name="quantity-banana" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <div class="product">
        <h3>Mutton</h3>
        <img src="mutton.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
        <br><br><p>Price: Rs 450.50</p>
        <div class="quantity">
          <label for="quantity-banana">Quantity:</label>
          <input type="number" id="quantity-banana" name="quantity-banana" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <div class="product">
        <h3>Beef</h3>
        <img src="beef.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
        <br><br><p>Price: Rs 300.50</p>
        <div class="quantity">
          <label for="quantity-banana">Quantity:</label>
          <input type="number" id="quantity-banana" name="quantity-banana" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <div class="product">
        <h3>octopus</h3>
        <img src="octopus.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
        <br><br><p>Price: Rs 500.00</p>
        <div class="quantity">
          <label for="quantity-banana">Quantity:</label>
          <input type="number" id="quantity-banana" name="quantity-banana" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
      <div class="product">
        <h3>Turkey</h3>
        <img src="turkey.jpg" class="img-rounded "  alt="Cinque Terre" width="200" height="200" > 
        <br><br><p>Price: Rs 350.00</p>
        <div class="quantity">
          <label for="quantity-banana">Quantity:</label>
          <input type="number" id="quantity-banana" name="quantity-banana" min="1" value="1">
        </div><br>
        <button class="add-to-cart">Add to Cart</button>
      </div>
    </div>
  </div>-->
</body>
</html>

