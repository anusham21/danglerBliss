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

 
         function scrapsPage(){
      //       alert("came toprofilepagefunction");
            window.location.href = "./scrapBook.php";
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
                           <nav class="navbar navbar-inverse col-sm-11" style="background-color:#337ab7;color:white">
                                            <div>
                                                <div class="navbar-header">
                                                <a class="navbar-brand" href="#">ANKUT SCRAP BOOK</a>
                                                </div>
                                                <ul class="nav navbar-nav" style="color:white" >
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
                                    <button type="button" class="btn btn-primary active">Profile </button>
                                    <button onclick ="scrapsPage()" type="button" class="btn btn-primary ">Scraps</button>
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
                <div class="col-sm-12" style="background-color: #DFF0FF; height:auto; border: 20px solid white">
                    <h1>Profile Intrests Page:</h1>
                </div>
                </div>
                </div>

  </div>

</body>


</html>