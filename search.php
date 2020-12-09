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


<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Alhamdulilallah</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-8 offset-sm-1">
            <?php
               $sum=0;
               $conn=new  mysqli("localhost","root","","pharmacy");
              
               //for delete information
              
               if(isset($_REQUEST['delete'])){
                   $sq="DELETE FROM daily_sell WHERE id={$_REQUEST['id']}";
                   if($conn->query($sq)){
                       echo "successfully deleted";
                   }
                   else
                   {
                       echo "failed";
                   }
               }
              


            //search option

            if(isset($_REQUEST["submit"])){
                $tarik=$_REQUEST["search"];
        $sql="SELECT * FROM daily_sell Where date='$tarik'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            echo '<table class="table">';
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Medicine Name</th>";
                        echo "<th>Group</th>";
                        echo "<th>Company Name</th>";
                        echo "<th>Quantity</th>";
                        echo "<th>Per-price</th>";
                        echo "<th>total</th>";
                        echo "<th>Action</th>";
                    echo"<tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row=$result->fetch_assoc()){
                    
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["mGroup"]."</td>";
                    echo "<td>".$row["company"]."</td>";
                    echo "<td>".$row["quantity"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo "<td>".$row["total"]."</td>";
                    echo '<td><form action="" method="POST"><input type ="hidden" name="id" value='.$row["id"].'><input type="submit" class="btn btn-sm btn-danger" name="delete" value ="delete"></form></td>';
                    $sum=$sum+$row["total"];
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            
            else{
                echo "0 result";
            }
            echo "toatal sell: $sum";
        }
        ?>    
             </div>
        
        </div>

    </div>

 <?php $conn->close(); ?>   




       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

</article>

<footer>
    <p>gmail:hossainnazmul191@gmail.com<p><br>
    
</footer>
</div>

</body>

</html>