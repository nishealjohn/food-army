<?php 

$con=mysqli_connect('localhost','root','','armys');
$id=$_POST['username'];
$pass=$_POST['password'];
$pass=sha1($pass);
$i='1'; $p='1';




if (isset($_POST['login']) ) {
	$get_news="Select * from account";

$run_news=mysqli_query($con,$get_news);
        	
        while($row_pro=mysqli_fetch_array($run_news)){
	  $a_id=$row_pro['username'];
      $a_pass=$row_pro['password'];

    


if ($a_id==$id and $a_pass==$pass){

	$i++;
	
	

}

else{
	$p--;
}

}

if ($i>'1') {



header("location:index.php?id=success");
	
}

elseif ($p<1) {
	
header("location:index.php?id=error");
}
}





else{
	header("location:login.php?unauthorise=unauthorise");
}


if (isset($_POST['dealerlogin']) ) {
	$get_news="Select * from account where type='dealer'";

$run_news=mysqli_query($con,$get_news);
        	
        while($row_pro=mysqli_fetch_array($run_news)){
	  $a_id=$row_pro['username'];
      $a_pass=$row_pro['password'];

    


if ($a_id==$id and $a_pass==$pass){

	$i++;
	
	

}

else{
	$p--;
}

}

if ($i>'1') {



header("location:dealer.php?id=success");
	
}

elseif ($p<1) {
	
header("location:dealer.php?error=error");
}

}






?>