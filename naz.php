<?php 

 $conn= new mysqli("localhost","root","","db");
 
 if(isset($_REQUEST['submit'])){
     $name=$_REQUEST["username"];
     $passw=$_REQUEST["pass"];

     $sql="SELECT * FROM login WHERE user='".$name."' AND pass='". $passw."' limit 1";
     $result=$conn->query($sql);
     if($result->num_rows>0){
        echo "<script> location.href='home.html'</script>";
     }
     else{
         echo "your password incorrect!";
     }
 }

?>