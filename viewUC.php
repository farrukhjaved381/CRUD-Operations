<!-- ViewUC.php -->
<?php
include("dbconn.php");
$q="Select * from unioncouncil";
$records=$conn->query($q);
while($row=$records->fetch_assoc()){
    $id=$row["id"];
    $name_uc=$row["name"];
    $address_uc=$row["address"];
    $phone_uc=$row["phone"];
    $name_nazim=$row["name_nazim"];
    $email_uc=$row["email"];
    echo "No.".$id. ":-<br> Name UnionCouncil: ".$name_uc. " <br>Address:  " .$address_uc." <br>Phone:  ".$phone_uc." <br>Name Nazim:  ".$name_nazim." <br>Email:  ".$email_uc."<br>";
    echo "<a href='editUC.php?id=$id'>Edit/</a>";
    echo "<a href='deleteUC.php?id=$id'>Delete</a>";
    echo "<hr>";
}
?>