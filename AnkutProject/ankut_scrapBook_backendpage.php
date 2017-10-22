<?php
session_start();    
include("detailsDbConnection.php");

function scrapDataEmpty(){
    echo "<em><p style = 'color:pink;'>Please enter some data in Scrap BOX!!!!<br></p></em>";
}


function scrapDatafilled($scrapentry){
    global $conn;
    $sql = "INSERT INTO anjyo.scrap(scrap_data,uid) VALUES ('".$scrapentry."','".$_SESSION["uidfinal"]."')";
    if($conn->query($sql)===TRUE){
        $last_id = $conn->insert_id;
        echo $last_id;
    }else{
        echo "Error :" .$sql."<br>".$conn->error;
    }
    $conn->close();
}

if($_SERVER["REQUEST_METHOD"]=="POST"){ 
$scrapentry=$_REQUEST['scraptext'];
//echo "The scrap text you have entered  is : ".$scrapentry;
        if (empty($scrapentry))
        {
        scrapDataEmpty();
        }
        else
        {
        scrapDatafilled($scrapentry);
        }


}


?>