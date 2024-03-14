<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with CSS </title>
		
		<link rel="stylesheet" href="css/css.css" />
		<script type="text/javascript" src="js/java.js"></script>
		
		<style>
			ul{
				font-family: Perpetua;
				list-style-type:none;
				background-color:#009DDC;
				font-color:#ffffff;
				height:46px;
				overflow:hidden;
			}

			li{
				float:left;
			}

			li a, .drp{
				  display: inline-block;
				  color:black;
				  text-align: center;
				  padding: 14px 110px;
				  text-decoration:none;  
			}

			li .menu-item{
				display:inline-block;
				font-color:#ffffff;
			}

			.menu-content{
				display:none;
				position:absolute;
				background-color:#f8f8f8;
				z-index:1;
				font-color:#ffffff;	
			}

			.menu-content a:hover{
			  font-family: Perpetua;
			  background-color:#003767;
			  font-color:#ffffff;
			  color: white;
			  text-decoration: none;
			  display: block;
			 
			}
			
			.menu-item:hover .menu-content{
				display:block;
			}

			.menu-item:hover{
				display:block;
				color: white;
				background-color: #003767;	
			}

			h1{
				color:#003767;
				font-family:perpetua;
			}
			
			
		</style>
		<script>
		
	
		function addToCart(X)
			{
			
				document.getElementById("cart").innerHTML += "<br>" + X;
				document.getElementById('cart').style.display="none";
			}

		function showcart()
			{
			
				document.getElementById('cart').style.display="block";
			}

		
		
		
		
		</script>
		
	</head>


	<body bgcolor="white">
	
	 

	
				
			

		<br><br><br>
	<div class="shoppingcart"><img src= "images/cart.png" width="100%" onclick="showcart()" />  </div>
	<div class="mycart" id="cart"  >  </div>


	<center>
	<img src= "images/logo1.png" align="center" width="30%" /> <br>
	</center>
	<h1 align="center"> Online Book Store </h1>
	
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Merch </a>
		<div class="menu-content">
			<a  href="add_merch.php">Add Merch</a><br>
			<a  href="remove_merch.php">Remove Merch</a><br>
			<a  href="display_merch.php">Display all Merch</a><br>
		</div>
		
		</li>
		

		<li class="menu-item"><a href="#" class="drp">Notebooks </a>	
		<div class="menu-content">
			<a href="add_notebooks.php">Add Notebooks</a><br>
			<a href="remove_notebooks.php">Remove Notebooks</a><br>
			<a href="display_notebooks.php">Display all Notebooks</a><br>
		</div>
		</li>		

		<li class="menu-item"><a href="#" class="drp"> Tech </a>	
		<div class="menu-content">
			<a href="add_tech.php">Add Tech</a><br>
			<a href="remove_tech.php">Remove Tech</a><br>
			<a href="display_tech.php">Display all Tech</a><br>
		</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>



	</ul>
	<p align="center"> Welcome to JBU's Online Book store - open for faculty/staff and students!<p>
	<br>
	
<?php
		$count=1;

		include ("demo_db_connection.php");
	
		$sql_product="SELECT * FROM product_tab";
		$result_product=$connect->query($sql_product);
		?>
		
		<table align="center" width=80% border=1>
		<tr>
		<?php
		
		while ($row_product = $result_product->fetch_assoc())
		{
		?>
			
				<td> <center>
					<img src='<?php echo $row_product["image"]; ?>' width="30%" /><br>
					<?php echo $row_product["product_name"]; ?><br>
					<?php echo $row_product["unit_price"]; ?><br>
					<button onClick="javascript:addToCart('<?php echo $row_product["product_name"]; ?>')"> Add to Cart </>
				</center> </td>
			
		
		
		
		<?php 
		
		if ($count>=3)
		{	echo "</tr><tr>";
			$count=1;
		}
		else
		{
			$count++;
		}
		
		}
	?>
	</table>

	

	

		</center>
	</body>
</html>



