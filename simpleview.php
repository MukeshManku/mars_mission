<?php
$connection=mysqli_connect("localhost", "root", "", "mars");
$results = mysqli_query($connection, "SELECT * FROM addd");
?>  

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1" align="center">
           <thead>
            <tr>
              <th>Packet Id</th>
              <th>Packet Type</th>
              <th>Packet Content</th>
              <th>Calories</th>
              <th>Expiry Date</th>
              <th>Quantity in liters</th>
             
           </thead>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
            
                <td><?php echo $row['packet_id'] ?></td>
                  
                <td><?php echo $row['packet_type'] ?></td>

                <td><?php echo $row['packet_content'] ?></td>
                
                <td><?php echo $row['calories'] ?></td>
                 
                <td><?php echo $row['exp_date'] ?></td>
                
                <td><?php echo $row['qty_ltr'] ?></td>
             
                         
                </tr>
                <?php    
                }
                ?>
            
            
            
        </table>   
       <center> <a href="index.php">Back</a></td></<center>
</body>
</html>