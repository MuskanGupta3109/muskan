<?php
if(isset($_POST['submit'])){

    $con=mysqli_connect('localhost','root','','register');
    $sql="SELECT * FROM `registration` where email='$_POST[email]' and password='$_POST[password]'";
    $result=mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0)
        {
            header("location:login.php");
        echo 'login success';
        }

    else
        echo 'login failed';
    
    }





?>
