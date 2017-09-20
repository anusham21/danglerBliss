<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
					
		  .bg-1 { 
		      background-color: #1abc9c; /* Green */
		      color: #ffffff;
		  }
		  .bg-2 { 
		      background-color: #474e5d; /* Dark Blue, purple code:5e4486 */
		      color: #ffffff;
		  }
		  .bg-3 { 
		      background-color: #fff; /* White */
		      color: #555555;
		   
		  }
					  .bg-grey {
			      background-color: #f6f6f6; /*grey color*/
			  }
			.logo-small {
		    color: #f4511e;
		    font-size: 25px;
			}

		/*<!-- Styling (Cousel Sliding ) Starts-->	*/
			    .carousel-control.right, .carousel-control.left {
			    background-image: none;
			    color: #1abc9c;
			}

			.carousel-indicators li {
			    border-color: #1abc9c;
			}

			.carousel-indicators li.active {
			    background-color: #f4511e;
			}

			.item h4 {
			    font-size: 19px;
			    line-height: 1.375em;
			    font-weight: 400;
			    font-style: italic;
			    margin: 70px 0;
			}

			.item span {
			    font-style: normal;
			}

		/*<!-- Styling (Carousel Sliding ) Ends -->	*/
		/*<!-- Styling (Nav Bar Section) Starts -->	*/
								.navbar {
					    margin-bottom: 0;
					    background-color: #eee;
					    z-index: 9999;
					    border: 0;
					    font-size: 12px !important;
					    line-height: 1.42857143 !important;
					    letter-spacing: 4px;
					    border-radius: 0;
					}

					.navbar li a, .navbar .navbar-brand {
					    color: black !important;
					}

					.navbar-nav li a:hover, .navbar-nav li.active a {
					    color: #f4511e !important;
					    background-color: #ccc !important;
					}

					.navbar-default .navbar-toggle {
					    border-color: transparent;
					    color: #fff !important;
					}
					

		/*<!-- Styling (Nav Bar Section) Ends -->	*/

		/*<!-- Styling (Slide in Animation) Starts -->	*/

					.slideanim {visibility:hidden;}
					.slide 
					{
					    /* The name of the animation */
					    animation-name: slide;
					    -webkit-animation-name: slide; 
					    /* The duration of the animation */
					    animation-duration: 1s; 
					    -webkit-animation-duration: 1s;
					    /* Make the element visible */
					    visibility: visible; 
					}

					/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
					@keyframes slide {
					    				0% {
					        opacity: 0;
					        transform: translateY(70%);
					  						  } 
					  				  100% {
					        			opacity: 1;
					 		    	   transform: translateY(0%);
										    } 
										}
					@-webkit-keyframes slide {
					    			0% {
					        		opacity: 0;
					       			 -webkit-transform: translateY(70%);
					    			} 
					    		100% {
					        		opacity: 1;
					       			 -webkit-transform: translateY(0%);
					   				 }
										}
					/*style for vertical Side Menu*/
					.vertical-menu {
						    width: 200px;
						}

						.vertical-menu a {
						    background-color: #eee;
						    color: black;
						    display: block;
						    padding: 12px;
						    text-decoration: none;
						}

						.vertical-menu a:hover {
						    background-color: #ccc;
						}

						.vertical-menu a.active {
						    background-color: #f4511e;
						    color: white;
						}

		/*<!-- Styling (Slide in Animation) Ends -->	*/
			
		</style>
		</head>
		<!-- scroll spy helps to scroll siretly when you spy on the Nav Bar !-->
		<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

		<!-- NAV (Tab Nav Bar Section) -->	
					<nav class="navbar navbar-default navbar-fixed-top">
							  <div class="container-fluid">
								    <div class="navbar-header">
								      <a class="navbar-brand" href="#"></a>
								    </div>
							   	    <ul class="nav navbar-nav">
								      <li><a href="#about">About</a></li>
								      <li><a href="#services">Services</a></li>
								      <li><a href="#reviews">Reviews</a></li>
								      <!--<li><a href="#portfolio">PortFolio</a></li>
								     
								      <li><a href="#register">Register</a></li>
								      <li><a href="#contactUs">Contact US</a></li>-->
								    </ul>
									<form class="navbar-form navbar-right">
										   <div class="form-group">
										   <input type="text" class="form-control" placeholder="Search">
										   </div>
									       <button type="submit" class="btn btn-default">Submit</button>
							   		 </form>							    
							  </div>
					</nav>
		<!-- Container (Heading Dangler Bliss Section) -->	
					<div class="container-fluid" style="background-color:#08e8de  ;color:white;"> 
					  	<div class="row">
					 		<div class="jumbotron text-center" style="background: linear-gradient(to bottom, #ff3300 10%, #08e8de 90%);" >
					 			<div class="page-header">
					  				<h1 style="text-align:center;">Danglers Bliss</h1>
					  			</div>
					 				 <p> We are specialized in paper crafting</p>
						  			<form class="form-inline">
						    				<div class="input-group">
						    				  <input type="email" class="form-control" size="50" placeholder="Email Address" required>
						      					<div class="input-group-btn">
						     					  <button type="button" class="btn btn-danger" style="background-color:#f4511e;color:white">Subscribe</button>
						      					</div>
						    				</div>
						  			</form>
					  		</div> 
						
						</div>
					</div>
						<br><br><br><br><br><br>	
		<!-- Container (About What is it Section) -->			
					<h1>Menu</h1>

		<div class="vertical-menu col-sm-2">
						  <a href="#" class="active">Home</a>
						  <a href="register.php">Register Here</a>
						  <a href="portfolio.php">Port Folio</a>
						  <a href="contactUs.php">Contact US</a>
						  <a href="cv.php">Curriculum Vitae</a>
		</div>

		<div id="about" class="container bg-1 text-center bg-grey col-sm-10" style="color:black">
					<br><br><h2>ABOUT</h2>	
					<h4>What is It?</h4><br><br> 
							  <p>We craft jewelry with paper using a special technique called ‘quilling’. Quilling, an ancient art form, involves rolling, shaping, and gluing strips of paper to create a variety of decorative designs. All jewelry are 100% hand-made by us in home. Subscribe below to get updates and Register below to view our jewelry</p>
					
					<br><br><br><br><br>
		<!-- Container (Services Provided Section) -->		
					<div id="services" class="container-fluid text-center bg-3">
					<h2>SERVICES</h2>
					<h4>What we offer</h4>
							  <br><br>
							<div class="row">
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-off logo-small"></span>
							      <h4>Paper Earrings</h4>
							     <p>Add Description.</p>
							</div>
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-heart logo-small"></span>
							      <h4>Silk Thread Earrings</h4>
							      <p>Add Description.</p>
							</div>
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-lock logo-small"></span>
							      <h4>Silk Thre Bangles</h4>
								  <p>Add Description.</p>
								</div>
							</div>
							  <br><br>
							<div class="row">
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-leaf logo-small"></span>
							      <h4>Home Delivery</h4>
								  <p>Add Description.</p>
							</div>
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-certificate logo-small"></span>
							      <h4>Online Payment</h4>
									<p>Add Description.</p>
							</div>
							<div class="col-sm-4">
							      <span class="glyphicon glyphicon-wrench logo-small"></span>
							      <h4 style="color:#303030;">Eco Friendly</h4>
								<p>Add Description.</p>
							</div>
							</div>
							
					</div>	
					<br><br><br><br><br>
			<!-- Container (Customer Review Section) -->	
					<div id="reviews" class="container text-center bg-grey">	
					<h2>REVIEWS</h2>
					<h4>What our customers say</h4>
								  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
								    <!-- Indicators -->
								    <ol class="carousel-indicators">
								      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								      <li data-target="#myCarousel" data-slide-to="1"></li>
								      <li data-target="#myCarousel" data-slide-to="2"></li>
								    </ol>

								    <!-- Wrapper for slides -->
								    <div class="carousel-inner" role="listbox">
								      <div class="item active">
								        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
								      </div>
								      <div class="item">
								        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
								      </div>
								      <div class="item">
								        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
								      </div>
								    </div>

								    <!-- Left and right controls -->
								    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								      <span class="sr-only">Next</span>
								    </a>
								    </div>
								    <br><br>
					</div>
					<br><br><br><br><br>
			</div>
		
		<!-- PAgenation Section -->			
						<ul class="pager">
							  <li><a href="#">Previous</a></li>
							  <li><a href="#">Next</a></li>
						</ul>
		<!-- Script for Smoothing the Scroll Section -->		
		<script>

					$(document).ready(function(){
					  // Add smooth scrolling to all links in navbar + footer link
					  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
					    // Make sure this.hash has a value before overriding default behavior
					    if (this.hash !== ""){
					      // Prevent default anchor click behavior
					      event.preventDefault();

					      // Store hash
					      var hash = this.hash;

					      // Using jQuery's animate() method to add smooth page scroll
					      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
					      $('html, body').animate({
					        scrollTop: $(hash).offset().top
					      }, 900, function(){
					   
					        // Add hash (#) to URL when done scrolling (default click behavior)
					        window.location.hash = hash;
					      });
					    } // End if
					  });
					})
		//slide in Animation-->
					$(window).scroll(function() {
				    $(".slideanim").each(function(){
				      var pos = $(this).offset().top;

				      var winTop = $(window).scrollTop();
				        if (pos < winTop + 600) {
				          $(this).addClass("slide");
				        }
				    });
				  });
		</script>

		</body>
		<!-- PHP Code Starts) -->	
		<?php
							//connect to PHP MYSQL DB -- Starts
						//ini_set('display_errors',1);
						//$servername = "localhost";
						//$username = "root";
						//$password = "kumar123";
						//$dbname = "userdata";
						// Create connection
					//	$conn = mysqli_connect($servername, $username, $password,$dbname);

						// Check connection
					//	if (!$conn) {
					//	    die("Connection failed: " . mysqli_connect_error());
					//	}else{
					//		echo"<i><p style= 'color:blue;'>*********************Connection Established Sucessfully with the testform DB ************************************<br><p><i>";
					//	}
					//connect to PHP MYSQL DB -- Ends	
												
		?>
		</html>