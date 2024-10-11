<!-- deleteDistrict.php -->
<?php
include_once("dbconn.php");
$record_id=$_GET["id"];
$q="Delete from district where id='$record_id'";
if($conn->query($q)){
    echo "District record deleted successfully";
}
?>