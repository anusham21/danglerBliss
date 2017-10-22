 <?php
session_start();
include("detailsDbConnection.php");

if(isset($_POST['username'])){
        $name=$_POST['username'];
        $pwd=$_POST['pwd'];
        $sql1="SELECT uname,uid FROM user_details WHERE uname='$name' and upassword='$pwd' ";
        $result=mysqli_query($conn,$sql1);
        while($row = $result->fetch_assoc()) {
                $_SESSION["unamefinal"] = $row["uname"];     
                $_SESSION["uidfinal"] = $row["uid"];    
        }
       if($result->num_rows==1)
       
       {
        echo "success";
        }
        else
        	{
        echo "failure";
        	}
        }
?>