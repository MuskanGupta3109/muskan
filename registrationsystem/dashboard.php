
<?php
require_once('database.php');
$query="select * from registration";
$result=mysqli_query($con,$query);

?>
           <table class="table table-bordered table-striped">
                            <tr>
                                <th>name</th>
                               
                                <th>email</th>
                            </tr>
                         
                                <tr>
                                   
                               <?php
                                 while($row=mysqli_fetch_assoc($result))
                                 {
                            ?>


                                    <td><?php echo $row['full name'];?></td>
                                    <td><?php echo $row['email'];?></td>

                                    </tr>
                                    <?php
                                 }

                                 ?>





                                
                                    
                    
                              
                         
                            
                            
                        </table>
