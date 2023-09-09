<?php 
     if(isset($_POST['submit'])){

        $con=mysqli_connect('localhost','root','','demo');
        $sql="SELECT * FROM `student` where email='$_POST[email]' and password='$_POST[password]'";
        $result=mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0)
            echo 'login success';
        else
            echo 'login failed';
        
     }
    
    ?>