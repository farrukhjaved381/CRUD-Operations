<!-- editUC.php -->
<?php
$record_id=$_GET["id"];
include_once("dbconn.php");
$q="Select * from unioncouncil where id='$record_id'";
$record=$conn->query($q);
$row=$record->fetch_assoc();
$id=$row["id"];
$name_uc=$row["name"];
$address_uc=$row["address"];
$phone_uc=$row["phone"];
$name_nazim=$row["name_nazim"];
$email_uc=$row["email"];
?>
<form name="editfrm" id="editfrm" method="POST" action="updateUC.php">
Name UnionCouncil<input type="text" name="UCname" id="UCname" value="<?php echo $name_uc; ?>"><br>
Address<input type="text" name="UCaddress" id="UCaddress" value="<?php echo $address_uc; ?>"><br>
Phone<input type="number" name="UCphone" id="UCphone" value="<?php echo $phone_uc; ?>"><br>
Name Nazim<input type="text" name="name_nazim" id="name_nazim" value="<?php echo $name_nazim; ?>"><br>
Email<input type="email" name="UCemail" id="UCemail" value="<?php echo $email_uc; ?>"><br>
    
    
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    <input type="submit" value="Update UnionCouncil record">

</form>