<!-- editDistrict.php -->
<?php
$record_id=$_GET["id"];
include_once("dbconn.php");
$q="Select * from district where id='$record_id'";
$record=$conn->query($q);
$row=$record->fetch_assoc();
$id=$row["id"];
$name_district=$row["name"];
$no_of_tehsils=$row["no_of_tehsils"];
$phone_district=$row["phone"];
$ac_name=$row["ac_name"];
$email_district=$row["email"];
?>
<form name="editfrm" id="editfrm" method="POST" action="updateDistrict.php">
Name District<input type="text" name="Dname" id="Dname" value="<?php echo $name_district; ?>"><br>
No of Tehsils<input type="number" name="no_of_tehsils" id="no_of_tehsils" value="<?php echo $no_of_tehsils; ?>"><br>
Phone<input type="number" name="Dphone" id="Dphone" value="<?php echo $phone_district; ?>"><br>
Name of AC<input type="text" name="ac_name" id="ac_name" value="<?php echo $ac_name; ?>"><br>
Email<input type="email" name="Demail" id="Demail" value="<?php echo $email_district; ?>"><br>
    
    
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    <input type="submit" value="Update District record">

</form>