



<?php      
    $host = "localhost";
    $user = "root";  
    $password = '';  
    $dn_name="demo1";
   
      
    $conn= mysqli_connect($host, $user, $password,$dn_name);  
   //check connection
   if(!$conn){
    die("connection failed:" . mysqli_connect_error());

   }
//create database
// $sql="CREATE DATABASE DEMO1";
// if(mysqli_query($conn,$sql)){
//     echo "databases created succesfully";

// }else{
//     echo"Error creating database:" .mysqli_error($conn);
// }

$tb="CREATE TABLE STUDENT(id INT(6),name VARCHAR(9))";
if ($conn->query($tb) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  

mysqli_close($conn);


?>  


