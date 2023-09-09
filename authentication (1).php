<?php      
    include('connection.php');  
    print_r($_GET);
    print_r($_POST); 
    $email = $_GET['email'];  
    $password = $_GET['pass'];  
      
        //to prevent from mysqli injection  
        // $email = stripcslashes($email);  
        // $password = stripcslashes($password);  
        // $email = mysqli_real_escape_string($con, $email);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login1 where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);  
         //$count=[$result];


        if($count>0){  
            echo "<h1><center> Login successful </center></h1>";     }  
            else{  
                echo "<h1> Login failed. Invalid email or password.</h1>";  
            }     
    ?>  