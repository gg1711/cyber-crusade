<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Cyber Crusades Registration</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
    <?php 
		 $name=$email=$phone=$college=$game="";
		 $nameErr=$emailErr=$phoneErr=$collegeErr=$gameErr="";
		 if($_SERVER["REQUEST_METHOD"]="POST"){
			 if(empty($_POST["name"]))
			 	$nameErr="Name is required";
			 else
			 	$name=$_POST["name"];
			if(empty($_POST["email"]))
			 	$emailErr="Email is required";
			 else
			 	$email=$_POST["email"];
			if(empty($_POST["phone"]))
			 	$phoneErr="Phone is required";
			 else
			 	$phone=$_POST["phone"];
			if(empty($_POST["college"]))
			 	$collegeErr="College is required";
			 else
			 	$college=$_POST["college"];
			if(empty($_POST["game"]))
			 	$gameErr="Game is required";
			 else
			 	$game=$_POST["game"];
		 }
		 
		 ?>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="http://2018.almafiesta.com/"><img src="img/logo.jpg" width="88" height="85"><br /><strong>CYBER CRUSADES</strong></a>
                  </div>                  
                  <p class="nav-text"></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li><a href="games.html">Games</a>
                        </li>
                        <li><a href="rules.html">Rules</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="http://2018.almafiesta.com/"><img src="img/logo.jpg" width="88" height="85"><br /><strong>CYBER CRUSADES</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="gallery.html">Gallery</a>
                        </li>
                      <li><a href="register.php">Register</a>
                        </li>
                        <li><a href="contact.html">Contact Us</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="head">
            <div class="line">
               <h1><BR><BR>What are you waiting for? Register ASAP!</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               
               </p>
               <h2>REGISTRATION</h2>
                <p>
         <ul type="disc">
         <li>Price for FIFA,NFS individual-Rs 100/-</li>
         <li>Price for COD,CS per team-Rs 500/-</li>
         </ul>
               <p class="s-12 m-12 l-8 center">
               </p>
            </div>
         </div>
        
         
         <!--FORM-->
         
        
         <div class="s-12 l-6">
                     <h2>Registration Form</h2>
           <form class="customform" method="POST" action="register.php">
                        <div class="s-12 l-7"><input name="name" placeholder="Your name" title="Your name" type="text" /><?php echo $nameErr; ?></div>
                        <div class="s-12 l-7"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" /><?php echo $emailErr; ?></div>
                        <div  class="s-12 l-7"><input name="phone" placeholder="Your phone" title="Your phone" type="number" /><?php echo $phoneErr; ?></div>
                        <div  class="s-12 l-7"><input name="college" placeholder="Your college" title="Your college" type="text" /><?php echo $collegeErr; ?></div>
                        <div align="center" class="s-12 l-7"><select name="game" default="Select the game">
												<option value="fifa">FIFA 15</option>
												<option value="cod">Call of Duty:Modern Warfare(2009)</option>
												<option value="nfs">Need for Speed:Most Wanted (2012)</option>
												<option value="csgo">Counter Strike:Global Offensive</option><?php echo $gameErr; ?>
												</select></div>
                        <div class="s-12"> </div>
                        <div></div>
                        <div class="s-12 m-6 l-4"><button type="submit" name="submit" value="register">Submit</button></div>
                     </form>
                     
                 
                  </div>
               </div>
            </div>
         </div>
         
         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
                 <?php
					 	$server="166.62.8.2";
						$username="alma18int";
						$password="teamAlma@18";
						$db="alma18int";
						$conn= mysqli_connect($server,$username,$password,$db);
						
						$sql="INSERT into cb (name,email,phone,college,game)
						VALUES ('".$name."','".$email."','".$phone."','".$college."','".$game."')";
						if(empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($collegeErr) && empty($gameErr)){
						if(isset($_POST["submit"])){
						if(mysqli_query($conn,$sql)){
								echo 'Registration Successfull!';
								}
						else{
								echo 'Registration failed due to error: '.mysqli_error($conn);
							}
						}
						else {
								
									}
								}
					
					 
					 ?>
               <h2>READY SET GO!</h2>
               <p class="subtitile">
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/cod_2.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/fifa.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/nfs_2.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/csgo_2.jpg">      
                     <p class="subtitile">
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Compete</h2>
                     <p class="s-12 m-12 l-8 center">"Do your work with your whole heart, and you will succeed - there's so little competition"
                     </p>
                  </div>
                  <div class="item">
                     <h2>Win Prizes</h2>
                     <p class="s-12 m-12 l-8 center">“No man needs sympathy because he has to work, because he has a burden to carry. Far and away the best prize that life offers is the chance to work hard at work worth doing.”
                     </p>
                  </div>
                  <div class="item">
                     <h2>Get Ready</h2>
                     <p class="s-12 m-12 l-8 center">"Game's just startin! Gear up it's gonna be legendary"
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Alma Fiesta 2k18
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                 Design and coding by WebD Team
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
   </body>

</html>
  