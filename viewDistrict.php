<!-- ViewDistrict.php -->
<?php
include("dbconn.php");
$q="Select * from district";
$records=$conn->query($q);
while($row=$records->fetch_assoc()){
    $id=$row["id"];
    $name_district=$row["name"];
    $no_of_tehsils=$row["no_of_tehsils"];
    $phone_district=$row["phone"];
    $ac_name=$row["ac_name"];
    $email_district=$row["email"];
    echo "No.".$id. ":-<br> Name District: ".$name_district. " <br>No. of Tehsils:  " .$no_of_tehsils." <br>Phone:  ".$phone_district." <br>Name of AC:  ".$ac_name." <br>Email:  ".$email_district."<br>";
    echo "<a href='editDistrict.php?id=$id'>Edit/</a>";
    echo "<a href='deleteDistrict.php?id=$id'>Delete</a>";
    echo "<hr>";
}
?>