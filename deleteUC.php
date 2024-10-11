<!-- deleteUC.php -->
<?php
include_once("dbconn.php");
$record_id=$_GET["id"];
$q="Delete from unioncouncil where id='$record_id'";
if($conn->query($q)){
    echo "Union Council record deleted successfully";
}
?>