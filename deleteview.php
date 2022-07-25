<?php
$connection=mysqli_connect("localhost", "root", "", "mars");
$results = mysqli_query($connection, "SELECT * FROM addd");
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM `addd` WHERE `sl.no.`='$id'";
     mysqli_query($connection, $sql);
    if(mysqli_affected_rows($connection) == 1)
	{
		
        echo '<script language="javascript">alert("Information Delete sucessfully..")</script>';
        echo '<script language="javascript">window.location = "deleteview.php"</script>';
	}
   
}
?>  

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1" align="center">
<center><h3>Delete particular Details</h3></center>
           <thead>
            <tr>
              <th>Packet Id</th>
              <th>Packet Type</th>
              <th>Packet Content</th>
              <th>Calories</th>
              <th>Expiry Date</th>
              <th>Quantity in liters</th>
              <th>ACTION</th>
             
           </thead>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
            
                <td><?php echo $row['packet_id'] ?></td>
                  
                <td><?php echo $row['packet_type'] ?></td>

                <td><?php echo $row['packet_content'] ?></td>
                
                <td><?php echo $row['calories'] ?></td>
                 
                <td><?php echo $row['exp_date'] ?></td>
                
                <td><?php echo $row['qty_ltr'] ?></td>

                <td><a href="deleteview.php?del=<?php echo $row['sl.no.']; ?>">Delete</a></td>
             
                         
                </tr>
                <?php    
                }
                ?>
            
            
            
        </table>   
       <center> <a href="index.php">Back</a></td></center>
</body>
</html>