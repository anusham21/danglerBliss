<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function myRegFormSubmitButton(){
              //document.getElementById("demo").innerHTML = "Form Submitted sucessfully";
              console.log("myregformsubmitButton function entered sucessfully")
              var firstname= document.getElementById("fname").value;
              var lastname= document.getElementById("lname").value;
              var identity= document.getElementById("id").value;
              var address1 = document.getElementById("address").value;
              var city1 = document.getElementById("city").value;
              var state1 = document.getElementById("state").value;
              var country1 = document.getElementById("country").value;
              var phone1 = document.getElementById("phone").value;

          
            var radios = document.getElementsByName('gender');
              var selValue="";
              for (var i = 0, length = radios.length; i < length; i++) {
                  if (radios[i].checked) {
                      // do whatever you want with the checked radio
                      alert(radios[i].value);
                      selValue=radios[i].value;
                      // only one radio can be logically checked, don't check the rest
                      break;
                  }
                }

                if(selValue==""){

                  alert("please select gender");
                }


                    if(firstname=="" || firstname ==null){
                              alert("first name cannot be empty");
                              return false;
                            }else if(lastname=="" || lastname == null){
                              window.alert("Last name cannot be Empty.");
                              return false;
                            }else if(identity=="" || identity == null){
                              window.alert("ID cannot be empty.");
                              return false;
                            }else if(address1=="" || address1== null){
                              window.alert("Address details needs to be updated");
                              return false;
                            }else if(city1 == "" || city1 == null){
                              window.alert("City field cannot be empty");
                              return false;
                            }else if(state1 == "" || state1 == null){
                              window.alert("State field cannot be empty");                          
                              return false;
                            }else if(country1 == "" || country1 == null){
                              window.alert("Country field cannot be empty");                          
                              return false;
                            }else if(phone1 == "" || phone1 == null){
                              window.alert("Phone field cannot be empty");                          
                              return false;
                            }

              
                          formSucess();
                    
    }
    function formSucess(){
     // document.getElementById("register").submit();
      window.alert("Registration Form is Submitted Sucessfully.Please Click on Display Button to view your Details.")
    }

   function showDisplay(){
    window.location.href = "display.php";
   }
  </script>
</head>
<body>
<!-- Container (Portfolio Section) -->  
  <div class= "container">
            <div class="jumbotron" style="background: linear-gradient(to bottom, #ff3300 10%, #08e8de 90%);">
              <h2 class="text-center" >Register Here</h2>
            </div>  
<!-- Container (Register Form Section) -->            
          
          <div id="register" class="container text-center" style="text-align:center;">

          
              <form id = "myform1" method="post" class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return myRegFormSubmitButton()"> 
                
                          <div class="form-group">
                                                             
                                <label class="control-label col-sm-2" for="fname"> First Name:</label>
                               <div class="col-sm-10">
                                 <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name= "fname">
                               </div>
                          </div>
                          
                           <div class="form-group">
                                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name= "lname">
                               </div>
                          </div>
        
                          <div class="form-group">
                                <label class="control-label col-sm-2" for="id"> ID:</label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="id" placeholder="Enter ID" name= "id">
                               </div>
                          </div>
                          <div class="container">  <b>Gender:<b>
                              <label class="radio-inline" >
                                  <input type="radio" class="radio-inline" placeholder="Enter Gender" name= "gender" value="M" />Male     
                            </label>  
                            <label class="radio-inline" >       
                              <input type="radio" class="radio-inline" placeholder="Enter Gender" name= "gender" value="F" />Female
                            </label>      
                          </div>
                          <div class="form-group">
                                <label class="control-label col-sm-2" for="address">Address: </label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="address" placeholder="Enter address details" name= "address">
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-sm-2" for="city">City: </label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="city" placeholder="Enter city Name" name= "city">
                              </div>
                          </div>                
                          <div class="form-group">
                                <label class="control-label col-sm-2" for="state">State: </label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="state" placeholder="Enter state Name" name= "state">
                              </div>
                          </div>                
                           <div class="form-group">
                                <label class="control-label col-sm-2" for="country">Country: </label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="country" placeholder="Enter Country Name" name= "country">
                              </div>
                          </div>
                          <div class="form-group">
                                <label class="control-label col-sm-2" for="phone">Phone: </label>
                                <div class="col-sm-10">
                                 <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name= "phone">
                               </div>
                          </div>
                          <div class="container"> 

                                  <label class="radio-inline" >
                                        <input type="submit" class="btn btn-primary"  value="Submit" style="text-align:center;">  
                                  </label>  
                                  <label class="radio-inline" >       
                                       <input type="reset" class="btn btn-primary"  value="Reset" style="text-align:center;">
                                  </label>      
                                  <br>
                                  <label>
                                     <br>   <input type="button" id = "displaybtn" class="btn btn-primary" onclick = "showDisplay()" value="Display" style="text-align:center;">
                                  </label>  
                          </div>                     
                </form>
    <!--             <form id = "myform1" method="post" class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" >
                        <div class="container"> 

                                            
                                            <label class="radio-inline" >
                                                  <input type="submit" class="btn btn-primary" formaction="display.php" value="Display" style="text-align:center;">
                                            </label>  
                                    </div>    
                </form> -->
          </div>
          <br><br><br><br><br>
          <?php
              INCLUDE("detailsDbConnection.php");   
                      function formData($fname,$lname,$gender,$address,$city,$state,$country,$phone,$id) 
                      {
                        // making conn as global
                        global $conn;
                        //update the Table dynamically = Schemaname.table name 
                        $sql = "INSERT INTO UserData.details (UserName,gender,address,city,state,country,phonenumber,id) VALUES ('".$fname.$lname."','".$gender."','".$address."','".$city."','".$state."','".$country."','".$phone."','".$id."')";        
                        if ($conn->query($sql) === TRUE)
                        {
                            echo "<br> ".$fname.$lname.$gender.$address.$city.$state.$country.$phone.$id." - abrca record added successfully";
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
                        $gender =$_REQUEST['gender'];
                        $address=$_REQUEST['address'];
                        $city=$_REQUEST['city'];
                        $state=$_REQUEST['state'];
                        $country=$_REQUEST['country'];
                        $phone=$_REQUEST['phone'];
                        $id=$_REQUEST['id'];
                        echo "Below Names are from index.PHP executed without Errors";
                        echo($entry )."<br>";
                        echo($lastname )."<br>";
                        echo($gender)."<br>";
                        echo($city)."<br>";
                        echo($state)."<br>";
                        echo($country)."<br>";
                        echo($phone)."<br>";
                        echo($id)."<br><br>";
                        if (empty($entry)||empty($lastname)||empty($gender)||empty($address)||empty($city)||empty($state)||empty($country)||empty($phone)||empty($id))
                        {
                          formDataEmpty();
                        }
                        else
                        {
                          formData($entry,$lastname,$gender,$address,$city,$state,$country,$phone,$id);
                        }
                        //header('Location: '.$_SERVER['PHP_SELF'].'?success'); 
                          //die();
                      }


        ?>


  </div>
  </body>
  </html>