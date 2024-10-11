<!-- ViewCity.php -->
<?php
include("dbconn.php");
$q="Select * from city";
$records=$conn->query($q);
while($row=$records->fetch_assoc()){
    $id=$row["id"];
    $name_city =$row["name"];
    $tehsils   =$row["tehsils"];
    $phone_city=$row["phone"];
    $district  =$row["district"];
    $email_city=$row["email"];
    echo "No.".$id. ":-<br> Name City: ".$name_city. " <br>Tehsils:  " .$tehsils." <br>Phone:  ".$phone_city." <br>District:  ".$district." <br>Email:  ".$email_city."<br>";
    echo "<a href='editCity.php?id=$id'>Edit/</a>";
    echo "<a href='deleteCity.php?id=$id'>Delete</a>";
    echo "<hr>";
}
?>