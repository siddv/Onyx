<?php
    session_start();
    if ($_SESSION['phplogin'] != true){
    header('Location: login.php');
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
    	<div class="gradient"></div>
     	<div id="page-wrap">
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
                <h1>Welcome <?php print($_SESSION['usernm']) ?></h1>
                <p>Welcome to Onyx blah blah. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit.</p>
                 <div class="home-feature left">
                 <h3>First Image</h3>
                 <div class="feature-image">
                 	<img class="in-featured-image" src="images/express.png" width="261" height="102">
                 	<div class="post"><p>Express</br>1/11/11</p></div>
                 </div>
                 <p>Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit.</p>
                 </div>
                 
                 <div class="home-feature right">
                 <h3>First Image</h3>
                 <div class="feature-image">
                 	<img class="in-featured-image" src="images/express.png" width="261" height="102">
                 	<div class="post"><p>Express</br>1/11/11</p></div>
                 </div>
                 <p>Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit.</p>
                 </div>
                 
                 <h3>An important title near in the middle of the page!</h3>
                 <div class="feature-image big">
                 	<img class="in-featured-image" src="images/" width="548" height="102">
                 	<div class="post"><p>This is</br>Exciting</p></div>
                 </div>
                 <p> Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Vivamus 
                 ac mauris tellus sit mauris tellus sit.
                 Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Vivamus 
                 ac mauris tellus sit mauris tellus sit.
                 </p>
                 
                                  <h3>And a really important title near the bottom of the page!</h3>
                 
                 <p> Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Vivamus 
                 ac mauris tellus sit mauris tellus sit.
                 Lorem ipsum dolor amet, 
                 consectetur adipiscing elit.  at nisi gravida aliquam nec semper 
                 quam. Vivamus ac mauris tellus sit mauris tellus sit. Lorem ipsum dolor amet, consectetur 
                 adipiscing elit.  at nisi gravida aliquam nec semper quam. Vivamus 
                 ac mauris tellus sit mauris tellus sit. Vivamus 
                 ac mauris tellus sit mauris tellus sit.
                 </p>
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
