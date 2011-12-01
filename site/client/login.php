<?php
	session_start();
	
	if(isset($_POST['login'])){	
		$password = $_POST['myPassword'];
		$username = $_POST['myUsername'];
		$dbuser = "svadgam1_202user";
		$dbpass = "clearnet";
		$connection = mysql_connect('localhost', $dbuser, $dbpass);
		$Sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";	
		mysql_select_db('svadgam1_202');
		$query = mysql_query($Sql);
		mysql_close($connection);
		$results = mysql_fetch_array($query);
	
	/*Woo! so login works and does a whole bunch of session stuff that I can reference it in other pages*/	
	
		if ($results){
				$_SESSION['phplogin'] = true;
				$_SESSION['loginCheck'] = false;
				$_SESSION['usernm'] = $_POST['myUsername'];
				$_SESSION['userID'] = $results['MemberID'];
				header('Location: index.php');
			}
			else {
				$_SESSION['loginCheck'] = true;
				header('location: login.php');
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>Onyx</title>
</head>

<body>
    <header>
     	<div id="page-wrap">
     	<div class="gradient"></div>
            <div class="logo"><h1>Onyx Designs</h1></div>
        	<nav>
                <ul>
                    <li><a href="services.html"><h3>Services</h3></a></li>
                    <li><a href="portfolio.html"><h3>Portfolio</h3></a></li>
                    <li><a href="contact.html"><h3>Contact</h3></a></li>
                    <li><a href="team.html"><h3>Team</h3></a></li>
                    <li><a href="about.html"><h3>About</h3></a></li>
                    <li><a href="index.html"><h3>Home</h3></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="clear"></div>
    <article>
    	<div id="page-wrap">
            <div class="sidebar">
                 <h3>Not just another CMS Service Because we have post-its!</h3>
                 <h2>Welcome To Onyx</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                 at nisi gravida aliquam nec semper quam. Vivamus ac mauris 
                 tellus sit amet eros scelerisque laoreet cursus neque sagittis. Ut
                 lacus sit amet hendrerit. Suspendisse pellentesque, ligula non
                 purus condimentum augue, a iaculis tortor urna quis risus. 
                 Suspendisse pellentesque, ligula non purus condimentum augue, 
                 a iaculis tortor urna quis risus. ligula non purus condimentum a 
                 a iaculis tortor urna quis risus.</p>
                 <h2>Featured Content</h2>
                 <div class="feature-image">
                 	<img class="in-featured-image" src="images/express.png" width="261" height="102">
                 	<div class="post"><p>Express</br>1/11/11</p></div>
                 </div>
                 <p>Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit.</p>
                 <p><b>14 Comments | 36 Likes | Created for John Doe</b></p>
                 <h2>Advertisements</h2>
                 <div class="advertise-box">Advertise Here</div>
                 <div class="advertise-box">Advertise Here</div>
                 <div class="advertise-box">Advertise Here</div>
                 <div class="advertise-box">Advertise Here</div>
            </div>  
            <div class="main-content">
                <h1>Client Login</h1>
                
                 <p>Welcome to the client area. Please login below.</p>
                
		<?php
			if(isset($_SESSION['loginCheck'])){
				if($_SESSION['loginCheck'] == true){
					echo "<br/>Login details incorrect, please try again";
				}
			}
		?>
		<form class="register" method="post" action="">
                   <label for="name">Username:</label><input name="myUsername" placeholder="Username..." type="text"></input><br>
                   <label for="email">Password:</label><input name="myPassword" placeholder="Password..." type="password"></input><br>
                   <input name="login" value="Login" type="submit"></input>
                </form>
                 
            </div>
            <div id="clear"></div>
        </div>
    </article>
    <footer>
        <div id="page-wrap">
            <ul>
            	<li class="special-foot-sec">
                    <h1>OnyxDesigns</h1>
                    <p>Generic caption to stick under the logo that explains somthing or other.</p>
                    <p>Copyright 2011 | All Rights Reserved</p>
                </li>
                
                <li class="foot-sec-twit">
                	<h3>Twitter Posts</h3>
                    <div class="large-post">
                        <p class="post-start"><b>@Someone</b> Says:</p>
                        <p>Sweet site or something like that, I wish I could do that...</p>
                        <p><b>@Someone</b> Says:</p>
                        <p>Yeah man, that would be so awesome if we could do that kind...</p>
                    </div>
                </li>
                
                <li class="foot-sec">
                	<h3>Networks</h3>
                    <a href="#"><div class="deviant-icon"></div><p>http://deviantart.com/onyx</p></a><div id="clear"></div>
                    <a href="#"><div class="facebook-icon"></div><p>http://facebook.com/onyx</p></a><div id="clear"></div>
                    <a href="#"><div class="twitter-icon"></div><p>http://twitter.com/onyx</p></a><div id="clear"></div>
                    <a href="#"><div class="rss-icon"></div><p>http://onyxdesigns.co.uk/rss</p></a><div id="clear"></div>
                </li>
                
                <li class="foot-sec">
                	<h3>Contact Info</h3>
                    <p><b>Phone No:</b>  01234 555-555</p>
					<p><b>Fax No:</b> 01234 666-666</p>
                    <p><b>Email:</b> Contact@onyx.co.uk</p>
                    <p><b>Address:</b> 55 Some Creative</p> 
                    <p>Street, Plymouth, UK PL1 2EH</p>
                </li>
            </ul>
        </div>   
    </footer>
</body>
</html>