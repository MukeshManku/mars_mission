<?php
$connection=mysqli_connect("localhost", "root", "", "mars");
if(isset($_POST['submit']))
{
    $pct_id=$_POST['p_id'];
    $pct_type=$_POST['p_type'];
	$pct_content=$_POST['p_content'];
	$calories=$_POST['calories'];
	$sch_date=$_POST['s_date'];
	$exp_date=$_POST['e_date'];
	$q_ltr=$_POST['qty_ltr'];
    
    $sql ="INSERT INTO addd (packet_id, packet_type, packet_content, calories, s_date, exp_date, qty_ltr)
	VALUES ('$pct_id','$pct_type','$pct_content','$calories','$sch_date','$exp_date','$q_ltr')";
    mysqli_query($connection, $sql);
    echo "<script>alert('record inserted sucessfully..');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- create form for mars mission-->
    <form action="" method="post">
		<table border="1" align="center">
			<center><h3>Input Details</h3></center>
        <tr>
		<td>Packet Id:</td>
		<td>
		<select name="p_id"  style="width:177px;">
		<option value="">Select</option>
    	<option>F1</option><option>F2</option><option>F3</option><option>F4</option>
		<option>F5</option><option>F6</option><option>F7</option><option>W1</option>
		<option>W2</option><option>W3</option><option>W4</option></td>
		</tr>
		<tr>
		<td>Packet Type:</td>
		<td>
		<select name="p_type"  style="width:177px;">
		<option value="">Select</option>
    	<option>Food</option><option>Water</option></td>
		</tr>
		
        <tr>
		<td>Packet Content:</td>
		<td>
		<select name="p_content"  style="width:177px;">
		<option value="">Select</option>
    	<option>-</option><option>MRE</option><option>Protien Bar</option><option>Biscuits</option>
		<option>Dry fruits</option><option>Rice</option><option>Apple Pie</option></td>
		</tr>
        <tr>
		<td>Calories:</td>
		<td>
		<select name="calories" style="width:177px;">
		<option value="">Select</option>
    	<option>-</option><option>500</option><option>1000</option><option>1500</option><option>2000</option></td>
		</tr>
		<tr>
		<td>Schedule Date:</td>
		<td><input type="date" name="s_date"></td>
		</tr>
        <tr>
		<td>Expiry Date:</td>
		<td><input type="date" name="e_date"></td>
		</tr>
        <tr>
		<td>Quantity in Litres:</td>
		<td>
		<select name="qty_ltr" style="width:177px;">
		<option value="">Select</option>
    	<option>-</option><option>01</option><option>02</option></td>
		</tr>
		</table>
		<center>
		<input type="submit" name="submit" value="submit">   <a href="index.php">Back</a>
</center>
	</form>
</body>
</html>