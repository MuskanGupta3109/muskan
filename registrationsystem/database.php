<?php
$host="localhost";
$username="root";
$dbpassword='';
$dbname="register";
$con=mysqli_connect($host,$username,$dbpassword,$dbname);
if($con){
    echo  "connection sucess";
}
else{
    echo "connection failed".mysqli_connect_error();
}

$name=$_POST['full_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$con_pass=$_POST['con_pass'];

$query="INSERT INTO registration  VALUES('','$name','$email','$pass','$con_pass')";
$data=mysqli_query($con,$query);
if($data){
    echo "Data is send";
}
else{
    echo "data is not send";
}




?>