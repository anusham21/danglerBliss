<?php
session_start();
if(!isset($_SESSION['uidfinal']) && empty($_SESSION['uidfinal'])){
    header("Location:./AnkutLogin.html");
}
include("detailsDbConnection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title> Data </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .scrap {
            margin: 5px;
        }
        .containerdiv1 {
                width: 150px;
                height:100%;
                
                margin:10 auto;
                line-height: 2.4em;
                }
</style>
    <script>
        var count = 0;
        var heart = 0;
        var like = 0;
        var mylike = 0;
        var myid = 0;
        var myid1 = 0;
        
        commentchildlicount = 0;
        var weatherObj ;
        function postScrap() {
            var  Scraptxt1= document.getElementById("scraptext").value;
            if (Scraptxt1 == "" || Scraptxt1 == null) {
                alert("Please Scrap something to Post!!!");
            } else {
                scrapInsertIntoDB();
            }
        }

        function deleteScrap(x, scrapid) {
            console.log("delete scrap called");

            $("#scrappost" + scrapid).remove();
            count--;
            $("#cnt").text(count);
        }

        function hideCommentSection(x) {
            $(x).parent().hide();
        }

        

        function deleteComment(x, scrapid) {
            $("#commentchildli" + scrapid).remove();
            commentchildlicount--;
            $("#comment").html("<b><span>Comments : " + commentchildlicount + "</span></b>");
        }
        function sendbtn() {
            var subchildcomment = document.getElementById("subchildComment").value;
            alert(subchildcomment);
            if (subchildcomment == "" || subchildcomment == null) {
                alert("Please Enter the Comment and Send");
            } else {
                myid = myid + 1;
                var commentlist = "<ul style='border: 2px solid white;padding:1%'  id='commentli' class = 'list-group' ><li  id='commentchildli" + myid + "' class ='list-group-item'  ><div class='form-group'><span class='glyphicon glyphicon-user col-sm-1'><b style='padding-left:1cm'>AM<b></span><textarea id='childComment" + myid + "'name='childComment' class='col-sm-10' style='width: 70%'rows='1'>" + subchildcomment + " </textarea><span id='delete1' onclick='deleteComment(this," + myid + ")'class='glyphicon glyphicon-trash col-sm-1'></span></div><li></ul>";
                $("#sendCommentli").append(commentlist);
                $("#subchildComment").val("");
                commentchildlicount++;
                $("#comment").html("<b><span>Comments : " + commentchildlicount + "</span></b>");
            }
          
            $.ajax({
                    type: "GET",
                    url: "hello.php",
                    contentType: "application/text",
                    success: function (responseData, textStatus, jqXHR) {
                        alert("Response from Server :" + responseData);
                    }
                });

        }

        function showWeather(callback){
//alert("came to weather");
           // loadMyOldScraps();
            $.ajax({
                url: "http://api.openweathermap.org/data/2.5/weather?q=Virginia%20Beach,us&appid=3af48993d11841c0e6b04fc2fc4edb37",
                dataType: "jsonp",
                jsonCallback: 'jsonp',
                    cache: false, 
                    success: function (data) {  
                        console.log(data);
                        weatherObj=data;
                       // var myObj = JSON.stringify(data);
                     //  var tempmax =  document.getElementById("googleMap").innerHTML = weatherObj.main.temp_max;
                    var tempmax = weatherObj.main.temp_max;
                    var city = weatherObj.name;
                    var humidity = weatherObj.main.humidity;
                    var googleMapItem = `<div style='border: 3px solid white; background-color:#FFA07A;height:auto;width:155px' class = "containerdiv1" ><h2 align='center'> WEATHER</h2><br>
                                        <b style='color:white;padding:2%'>City : ${city} </b><br>
                                        <b style='color:white;padding:1%'>Max Temp: ${tempmax}</b><br>
                                        <b style='color:white;padding:2%'>Humidity: ${humidity}</b>
                                        </div>`;

                        $("#googleMap").append(googleMapItem);
                         //   document.getElementById("googleMap").innerHTML += myObj;
                        
                    }
            });
        }

         
function scrapInsertIntoDB(){
            var Scraptxt = document.getElementById("scraptext").value;
           $.ajax({
               type: 'post',
               url: 'ankut_scrapBook_backendpage.php',
               data: "scraptext=" +Scraptxt,
               success: function(response){
                   var newScrapId=response;
                    myid = newScrapId;
                 var time = new Date();
                var dateStamp = time.toDateString();
                var timeStamp = time.toLocaleTimeString();
                var postitem = `<li class='list-group-item scrap' id='scrappost${myid}' style='background-color:#DFF0FF; border = 3px solid white '>
                                <h4 class='list-group-item-heading'>
                                <span class='glyphicon glyphicon-user'></span> <?php echo $_SESSION["unamefinal"];?>
                                </h4>
                            <div>
                            <label name='scrapText' class='list-group-item-text col-sm-10 scrap-body' id='Scraptext4' cols='100' rows='2'> ${Scraptxt}
                            </label>
                             <a onclick='deleteScrap(this,${myid})'><span style='float: right;' class='glyphicon glyphicon-trash'>
                                </span></a>
                            </div><br><br>
                            <br>
                            <div>
                                    <a onclick='heartupdateIntoDB("${myid}")'><b>
                                    <span id='heartcolorglyph${myid}'  class='glyphicon glyphicon-heart'></b>
                                    </span></a><b id ='heart${myid}'> 0</b>                                    
                                    <a onclick='likesUpdateIntoDB("${myid}")'>
                                   <b> Likes</b> <b id='like${myid}'>0</b></a>
                                   <span id='comment'><b>Comments</b></span>

									<div id='txtarea' class='form-group' style='height:50px'>
									<textarea class = 'col-sm-8' id='subchildComment' placeholder='Please enter here' name='subchildComment' class=' form-control' rows='1' style='min-width: 10%'></textarea>
									<button class = 'col-sm-2' onclick = 'sendbtn()' id='sendbtn1' type='button' class='btn btn-success'>Send</button>
                                    <p id='time-holder' style='float: right;'>
                                    <b>Posted on Time:</b>  ${timeStamp}
                                    <b> Date:</b> ${dateStamp}
                                    </p>
                                </div>
									
                            </div>      
                     <div>  
                        <div id='sendCommentli'>      
                           childcomments come here
                    </div>
                    </div>
                </li>`;

                $("#posts").append(postitem);
                //To update the number of scraps in the Badge
                count++;
                $("#cnt").text(count);
                //To make the scrap writtenin the Text Box to Null after Posting
                $("#scraptext").val("");

            
               }
           });
        }
        function heartupdateIntoDB(x) {
            heart++;
            var heartcount =$("#heart"+x).text();
            heartcount =parseInt(heartcount) +1;
            $("#heart"+x).text(heartcount);
           // $("#heartcolorglyph"+x).html("<a ><span id ='heart' style='color:#FF69B4' class='glyphicon glyphicon-heart'></span></a> ")
           // alert(heartcount);
           // $(x).html("<a ><span id ='heart' style='color:#FF69B4' class='glyphicon glyphicon-heart'></span></a> " + "<b style='color:black'>" + heart + "</b>");
           $.ajax({
                type: 'post',
                url: 'ankunt_heartcount_backend.php',
                data: "scrapid="+x,
                success: function(response){
                 alert(response);

                }
            });
        }

        function likesUpdateIntoDB(x){
            var likeCount=$("#like"+x).text();
            likeCount = parseInt(likeCount) +1;
            $("#like"+x).text(likeCount);
            
          $.ajax({
                type: 'post',
                url: 'ankunt_likecount_backend.php',
                data: "scrapid="+x,
                success: function(response){
                 alert(response);

                }
            });
        }

         function Profile_page(){
            // alert("came toprofilepagefunction");
            window.location.href = "./profilePage.php";
            //  $.ajax({
            //          type: "POST",
            //          url: "Profile_page.php",
            //          contentType: "application/text",
            //          success: function (responseData, textStatus, jqXHR) {
            //              alert("Response from Server :" + responseData);
            //          }
            //      });
         }

        function friendsList_page(){
            window.location.href = "./friendsPage.php";
             
         }

        //  function logout{

        //  }
    </script>
</head>
<style>
    .spaceclass {
        padding-left: 10px;
    }
</style>

<body style="background-color:#80ABE2" onload="showWeather()">
    <div class="container-fluid">
                   
                    <div class="col-sm-12">
                           <nav class="navbar navbar-inverse col-sm-11" style="background-color : #337ab7">
                                            <div>
                                                <div class="navbar-header">
                                                <a class="navbar-brand" href="#">ANKUT SCRAP BOOK</a>
                                                </div>
                                                <ul class="nav navbar-nav" style="color:white">
                                                <li class="active"><a href="#">Home</a></li>
                                                <li><a href="#">Page 1</a></li>
                                                <li><a href="#">Page 2</a></li>
                                                </ul>
                                                <form class="navbar-form navbar-left">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Search Friends">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                </form>
                                            </div>
                                        </nav>
                                

                                <p align = "right" class="col-sm-1"> 
                                        <a  href="AnkutLogin.html" style="background-color : #5cb85c" class="btn btn-info btn-lg">
                                        <span class="glyphicon glyphicon-log-out"></span> Log out
                                        </a>
                                </p> 
                    </div>


                    <div class="col-sm-2" style="border: 10px solid white">
                        <div class="row">
                            <div class="col-sm-12" style="background-color :#DFF0FF;height:auto;border:10px solid white">
                                <img class="img-responsive rounded" src="imageAnkut/loginMan.jpg" alt="loginman" style="width:60% height:100%">
                            </div>
                            <div class="col-sm-12" style="background-color:#DFF0FF;height:auto;border:10px solid white;padding:20%">
                                <div class="btn-group-vertical"> <br>
                                    <button onclick ="Profile_page()"  type="button" class="btn btn-primary">Profile </button>
                                    <button type="button" class="btn btn-primary active">Scraps</button>
                                    <button onclick ="friendsList_page()" type="button" class="btn btn-primary">Friends List</button>
                                    <button type="button" class="btn btn-primary">Education Details</button>
                                    <button type="button" class="btn btn-primary">Proffesional Details</button>
                                    <button type="button" class="btn btn-primary">Intrests</button>
                                    <button type="button" class="btn btn-primary">xxxx</button><br><br>    </div>
                                <div id="googleMap" style="" > </div>
                                
                            </div>
                        </div>
                    </div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-12" style="background-color: #DFF0FF; height:auto; border: 10px solid white">
                    <p><b style="color:#126FC5;"><h1>SCRAP BOX </h1></b> </p>
                    <div class="form-group">
                        <textarea class="col-sm-12" placeholder="Please enter your scrap here" id="scraptext" cols="160" rows="5"></textarea>
                        <p>
                            <b> <br>Scraps <span id = "cnt" class="badge">0</span> Photos <span class="badge">20</span> Vedios <span class="badge">10</span>Abums <span class="badge">6</span>
                            <button type="button" style="float: right;" class="btn btn-success" onclick="postScrap()">Post</button> 
                        </b>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12" style="background-color: #DFF0FF ;height:auto; border: 10px solid white">
                    <h3>Scraps</h3>
                    <ul id="posts" class="list-group">

                        <?php 
                        
                        
                            $sql1 ="SELECT scrap.scrapid, scrap.likes_count,scrap.hearts_count,scrap.scrap_data,user_details.uname FROM `scrap` INNER JOIN `user_details` WHERE scrap.uid= ".$_SESSION["uidfinal"]." AND scrap.uid=user_details.uid";
                            //echo $sql1;
                            $result1=mysqli_query($conn,$sql1);
                            while($row=$result1->fetch_assoc()){
                               $_SESSION["s_scrpid"]=$row["scrapid"];
                            
                                echo "<li class='list-group-item scrap' id='scrappost".$row["scrapid"]."' style='background-color:#DFF0FF; border = 3px solid black '><h4 class='list-group-item-heading'>
                                <span class='glyphicon glyphicon-user'></span> ".$_SESSION["unamefinal"]."
                                </h4>
                            <div><label name='scrapText' class='list-group-item-text col-sm-10 scrap-body' id='Scraptext4' cols='100' rows='2'>". $row["scrap_data"]."</label><a onclick='deleteScrap(this,".$row["scrapid"].")'><span style='float: right;' class='glyphicon glyphicon-trash'>
                                </span></a></div><br><br>
                                <div>
                                <a onclick='heartupdateIntoDB(".$row["scrapid"].")'><b>
                                    <span id='heartcolorglyph".$row["scrapid"]."' class='glyphicon glyphicon-heart'></b><b id ='heart".$row["scrapid"]."'>".$row["hearts_count"]."</b>
                                    </span></a>
                                <a onclick='likesUpdateIntoDB(".$row["scrapid"].")'><b>Likes</b> <b id='like".$row["scrapid"]."'>" .$row["likes_count"]."</b>
                                </a>
                                <span id='comment'><b>Comments<b></span><br>   
                                <div id='txtarea' class='form-group' style='height:50px'>
                                <textarea class = 'col-sm-8' id='subchildComment' placeholder='Please enter here' name='subchildComment' class=' form-control' rows='1' style='min-width: 10%'></textarea>
                                <button class = 'col-sm-2' onclick = 'sendbtn()' id='sendbtn1' type='button' class='btn btn-success'>Send</button>
                                <p id='time-holder' style='float: right;'>
                                <b>Posted on Time:</b>
                                <b> Date:</b>
                                </p>
                            </div>
                                
                        </div>      
                     <div>  
                      
                     <div id='sendCommentli' style='background-color :#FFA07A'>      
                    
              </div>
                 </div>
                </li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>



</body>


</html>