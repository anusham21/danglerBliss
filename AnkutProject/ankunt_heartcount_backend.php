<?php
session_start();
include("detailsDbConnection.php");

$scrapidofheart=$_POST['scrapid'];
$sql1 ="UPDATE scrap SET hearts_count=hearts_count+1 WHERE uid = ".$_SESSION["uidfinal"]." AND scrapid='$scrapidofheart'";
if($conn->query($sql1)===TRUE){
    echo "Updated Hearts count in to DB sucessfullyy";
  
}else{
    echo "Error :" .$sql."<br>".$conn->error;
}
$conn->close();


?>