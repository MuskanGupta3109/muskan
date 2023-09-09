<?php
    // getting all values from the HTML form
    if(isset($_GET['submit']))
    {
       
        $email = $_GET['email'];
        $password = $_GET['password'];
    

    // database details
    $host = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "demo";


    // creating a connection
    $con = mysqli_connect($host, $username, $dbpassword, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
   

    // using sql to create a data entry query
    $sql = "select * from student where  email= '$email' and password ='$password'";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if(mysqli_num_rows($rs)>0)
    {
        echo "login successfully!...";
    }
    else{
        echo "failed!..";
    }
  
    // close connection
    mysqli_close($con);
    }
    else
        echo "<script>window.location.href='register.html'</script>"
?>
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