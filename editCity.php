<!-- editCity.php -->
<?php
$record_id=$_GET["id"];
include_once("dbconn.php");
$q="Select * from city where id='$record_id'";
$record=$conn->query($q);
$row=$record->fetch_assoc();
$id        =$row["id"];
$name_city =$row["name"];
$tehsils   =$row["tehsils"];
$phone_city=$row["phone"];
$district   =$row["district"];
$email_city=$row["email"];
?>
<form name="editfrm" id="editfrm" method="POST" action="updateCity.php">
Name District<input type="text" name="Cname" id="Cname" value="<?php echo $name_city; ?>"><br>
Tehsils<input type="text" name="tehsils" id="no_of_tehsils" value="<?php echo $tehsils; ?>"><br>
Phone<input type="number" name="Cphone" id="Cphone" value="<?php echo $phone_city; ?>"><br>
Distric<input type="text" name="district" id="district" value="<?php echo $district; ?>"><br>
Email<input type="email" name="Cemail" id="Cemail" value="<?php echo $email_city; ?>"><br>
    
    
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    <input type="submit" value="Update City record">

</form>