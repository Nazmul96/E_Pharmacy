<?php
    $uname="admin";
    $psw="admin";
    session_start();
    if(isset($_REQUEST["submit"])){
    if($_REQUEST['user']==$uname && $_REQUEST['pas']==$psw){
        $_SESSION['uname']=$uname;
        echo "<script> location.href='home.php'</script>";
    }
    else{
        echo "<script>user or password incorrect!</script>";
    }
}  
      
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" style="margin: 200px 450px;">

 <h3 style="color:blue; margin-left:50px;">Admin Login</h3>
 
username: <input type="text" name="user" placeholder="username"><br><br>
password: <input type="password" name="pas" placeholder="password"><br><br>
<button type="submit" name="submit" value="submit" style="background-color:#008CBA; color:white; margin: 2px 2px">Login</button>
</form>
</body>
</html>