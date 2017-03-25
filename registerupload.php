
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






$username=mysqli_real_escape_string($con,$_POST['username']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$number=mysqli_real_escape_string($con,$_POST['number']);

$password=mysqli_real_escape_string($con,$_POST['password']);
$password=sha1($password);


$sql = "INSERT INTO account (name, contact, username, password) VALUES ('$name', '$number', '$username', '$password');";









 if (!mysqli_query($con,$sql))

{ 
    
    header("location:register.php?id=error");

    }

else
{
     header("location:login.php?id=successreg");
}



?>