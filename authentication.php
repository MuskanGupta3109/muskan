<?php      
    include('connection.php');  
    
   if(isset($_GET['submit'])) 

   { 
   
    
    
    $email = $_GET['email'];  
    $password = $_GET['pass'];  
      
        //to prevent from mysqli injection  
        // $email = stripcslashes($email);  
        // $password = stripcslashes($password);  
        // $email = mysqli_real_escape_string($con, $email);  
        // $password = mysqli_real_escape_string($con, $password);  
      
        echo $sql = "select *from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
       // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       if(mysqli_num_rows($result)>0)
       
        


         
            echo "<h1><center> Login successful </center></h1>"; 
            else{  
                echo "<h1> Login failed. Invalid email or password.</h1>";  
            }   }
            


    else{
        // echo"<script>window.location.href='2.html'</script>";
    }
     
    ?>  