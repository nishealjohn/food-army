

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






$name=mysqli_real_escape_string($con,$_POST['pname']);
$image=mysqli_real_escape_string($con,$_POST['pimage']);
$cat=mysqli_real_escape_string($con,$_POST['pcat']);

$price=mysqli_real_escape_string($con,$_POST['price']);
$dealer=mysqli_real_escape_string($con,$_POST['dealer']);


$sql = "INSERT INTO product (name, images, dealer, price, cat) VALUES ('$name', '$image', '$dealer', '$price','$cat');";









 if (!mysqli_query($con,$sql))

{ 
    
    header("location:dealer.php?id=fail");

    }

else
{
     header("location:dealer.php?id=success");
}



?>