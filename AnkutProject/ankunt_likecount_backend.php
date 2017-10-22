<?php
session_start();
include("detailsDbConnection.php");

$scrapidoflik=$_POST['scrapid'];
$sql1 ="UPDATE scrap SET likes_count=likes_count+1 WHERE uid = ".$_SESSION["uidfinal"]." AND scrapid='$scrapidoflik'";
if($conn->query($sql1)===TRUE){
    echo "Updated Likes count in to DB sucessfullyy";
  
}else{
    echo "Error :" .$sql."<br>".$conn->error;
}
$conn->close();
//echo $sql1;

?>