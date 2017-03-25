
<?php

$con = mysqli_connect('localhost','root','','armys');

if(!$con)
{
    echo 'not connected to server';
}


if(!mysqli_select_db($con,'armys'))
{
    echo 'database not selectd';
}

$i=$_GET['id'];






$cart=mysqli_real_escape_string($con,$_GET['id']);

$name=$_GET['name'];

$sql = "UPDATE account SET cart='$cart' WHERE username='$name'";









 if (!mysqli_query($con,$sql))

{ 
    
    header("location:cart.php?id=error");

    }

else
{
     header("location:cart.php?id=successreg");
}



?>