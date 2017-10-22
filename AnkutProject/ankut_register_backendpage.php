<?php
              INCLUDE("detailsDbConnection.php");   
              
                      function formData($fname,$lname,$upassword,$gender,$address,$city,$state,$country,$phone) 
                        {
                            // making conn as global
                            global $conn;
                            //update the Table dynamically = Schemaname.table name 
                            $sql = "INSERT INTO anjyo.user_details (uname,upassword,gender,address,city,state,country,phone) VALUES ('".$fname.$lname."','".$upassword."','".$gender."','".$address."','".$city."','".$state."','".$country."','".$phone."')";       
                            echo $sql; 
                            if ($conn->query($sql) === TRUE)
                            {
                                //echo "<br> Registration details are added successfully to the DB table";
                                  
                                header( 'Location: ./AnkutLogin.html' ) ;
                                echo "Session variables are sucessfully set";
                            } 
                            else 
                            {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            $conn->close();
                        }
                      function formDataEmpty() 
                        {
                            echo "<em><p style = 'color:red;'> One of the fields in the Registration form is not filled .<br></p></em>";
                        }
                      //pull values from POST
                      if ($_SERVER["REQUEST_METHOD"]=="POST")
                      {
                        $entry=$_REQUEST['fname'];
                        $lastname=$_REQUEST['lname'];
                        $upassword=$_REQUEST['upassword'];
                      $gender =$_REQUEST['gender'];
                      $address=$_REQUEST['address'];
                        $city=$_REQUEST['city'];
                        $state=$_REQUEST['state'];
                        $country=$_REQUEST['country'];
                        $phone=$_REQUEST['phone'];
                        
                        echo "All field requests are sucessfully executed without Errors";
                        echo($entry )."<br>";
                        echo($lastname )."<br>";
                        echo($upassword)."<br>";
                        echo($gender)."<br>";
                        echo($address)."<br>";
                        echo($city)."<br>";
                        echo($state)."<br>"; 
                        echo($country)."<br>";
                        echo($phone)."<br>";
                         
                        
                      
                        if (empty($entry)||empty($lastname)||empty($upassword)||empty($gender)|empty($address)||empty($city)||empty($state)||empty($country)||empty($phone))
                        {
                          formDataEmpty();
                        }
                        else
                        {
                          formData($entry,$lastname,$upassword,$gender,$address,$city,$state,$country,$phone);
                        }
                        //header('Location: '.$_SERVER['PHP_SELF'].'?success'); 
                          //die();
                      }


        ?>
