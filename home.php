<?php
    session_start();
    if(isset($_SESSION['uname'])){
		
   
    }
    else{
		echo "<script> location.href='login.php'</script>";
	}

    
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-pharmacy</title>
<style>
	.continer{
	width:100%;
	border:1px solid gray;
	}
	header,footer{
	color:white;
	background-color:teal;
	text-align:center;
	padding:10px;
	
	}
	nav{
	max-width: 100px;
	float:left;
	margin:0;
	padding:1em;
	}
	
	 a {
		text-decoration: none;
		color:rgb(27, 150, 129);
	}
	article{
	margin-left:170px;
	border-left:1px solid gray;
	padding: 1em;
	overflow: hidden;
	}
</style>
</head>
<body>
<div class="continer">
<header>

<h1>E-pharmacy</h1>
<form action="search.php" method="POST">
	<input type="text" name="search">
	<input type="submit" value="submit" name="submit">
</form>

</header>
<nav>
<ul style="list-style-type:square;color:tomato">
<li ><a href="add_info.php">Add medicine information</a> </li><br>
<li><a href="daily_sell.php">Daily sell entry</a> </li><br>

<form action="logout.php" method="POST">
	<button type="submit" name="logout" value="submit" style="background-color:#785b96; color:white; margin: 2px 2px">Logout</button>
	</form>

</ul>
</nav>
<article>
  <h3>This software is very helpfull for the user</h3>
  <h3>admin can get easily their daily sell</h3>
  <h3>admin can add product infromation</h3>
  <h3>Here also has a search option </h3>


</article>

<footer>gmail:hossainnazmul191@gmail.com</footer>
</div>

</body>

</html>