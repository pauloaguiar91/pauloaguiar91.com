
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A webpage dedicated to Paulo Aguiar's software and projects.">
    <meta name="author" content="Paulo Aguiar">

    <title>Blog</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="scripts/jQuery.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"> pauloaguiar91.com</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li class="active"><a href="blog.php">Blog</a></li>
             <li><a href="misc/paresume.pdf">Resume</a></li>
             <li><a href="projects/index.html"> Projects </li></a>
          </ul>
          <div class = "socialLinks"> 
            <a href = "https://github.com/pauloaguiar91"><img src = "img/github.png" /> </a>
            <a href = "https://www.facebook.com/paulo.aguiar91"><img border="0"src = "img/facebook.gif" /> </a>
            <a href = "https://twitter.com/PauloAguiar91"><img src = "img/twitter.gif" /> </a>
            <a href = "https://plus.google.com/108964831820304030474/posts"><img src = "img/gplus.png" /> </a>
            <a href = "http://www.linkedin.com/pub/paulo-aguiar/52/aa/294"><img src = "img/linkedin.png" /> </a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class = "container">
	<div class = "col-lg-8 mainBlog">
		<h1> Blog </h1>
			<div class="divider"></div>
				<span class = "blogDate">August 23rd, 2013 </span> <br>
		<span class ="blogText">Over the past week I have been looking into getting back with into Android development. Currently looking at a few open source IM projects around the web, then I'll be getting to work on improving whats already out there and making it look good.<br> <br>
		 I have also added some new features and tweaks throughout the site. 
		<ul>
			<li>Tooltips on the projects page, less cluttered text and more room for images </li>
			<li> Dividers now animate on page load </li>
			<li> New text animation on the about page... has a nice linux feel to it </li>
			<li> Added input sanitization for the blog </li>
			<li> ChatCS is now live! Limited in features for now... but soon ;) </li>
		</ul>
		
		Now that the site is completed I will continue on with my other projects (Game2d,ChatCS, and AndroidIM). 
		
		<br><br> -Paulo Aguiar
		
		</span>
		

		<div class ="divider"></div>

		<span class = "blogDate">August 16th, 2013 </span> <br>
		<span class = "blogText" > After a bunch of server errors, I decided to just switch my shared server over from Windows back to Linux. I was getting a bunch of random problems from HostGator when implementing my comment system, so I decided it wasn't worth the hassle and I just switched it back over. <br><br>
		
		That said, I have implemented the commenting system on this page. Next on the list is some jQuery effects and Im in the process of talking to designers as well as working on some graphics for the site on my own to make it shine a bit more. <br><br>
		
		The mobile page has completely been redesigned with jQuery Mobile! I'm not really expecting many people to check it out, but hey... its done, and looks pretty good.
		
		<br><br> -Paulo Aguiar</span>
		
		<div class ="divider"> </div>
		
		
		<span class = "blogDate">August 9th, 2013 </span> <br>
		<span class = "blogText" > Welcome to the newly redesigned pauloaguiar91.com! I have been working at Ictinus Design the past few weeks and I have learned so much more about proper web design that I decided to completely revamp my already new site and design something with a lot more attention to detail. The new site is also much quicker to load due to no background image (meh... who needs it anyway?) <br><br>
      Im not sure why but every few months when I get better at web design I feel the need to completely revamp my personal site to relect my current level of skill.  I do plan to implement some PHP and jQuery functionality but the main goal of the first iteration was to bring the site's front-end a much better look, while taking the time to brainstorm some functionality for the backend. <br> <br>

      The new nav bar is persistant when scrolling for easy navigation. Less 90's feeling CSS effects and more actual images to make the site feel like it was built in 2013.<br><br>

      Some planned features for the next iteration include: <br> 
      <ul> 
        <li> jQuery animations and css tricks to make the site more dynamic </li>
        <li> For the blog page, I want to implement a guestbook style system from scratch using PHP. </li>
      </ul>
        <br> If you notice anything weird with the site, dont hesitate to email me at <a href="MAILTO:pauloaguiar@outlook.com"> pauloaguiar@outlook.com</a> <br><br>

     -Paulo Aguiar</span>
		<div class = "divider2"></div>
	</div>
	<div class = "col-lg-3 sideBlog"> 
    <h1> Post History </h1>
    <a href="blog.php"> August 23rd, 2013 </a> <br>
    <a href="blog.php"> August 16th, 2013 </a> <br>
    <a href=""> August 12, 2013 (mobile only) </a> <br>
    <a href="blog.php"> August 9th, 2013 </a>
	</div>
</div>

<div class = "container">
	<div class = "col-lg-6"> 
		<h3>Post A Comment:</h3>
<form action="scripts/post.php" method="post">
   <strong>Name:</strong><br/> <input type="text" name="name" /><br/>
    <strong>Email:</strong><br/> <input type="text" name="email" /><br/>
    <strong>Message:</strong><br/> <textarea name="message" rows="5" cols="90"></textarea><br/>
    <input type="submit" value="Submit">
</form>
 
<h3>Existing Comments:</h3>
<?php
require_once 'scripts/config.php';
$allPostsQuery = mysql_query("select * from comments order by `timestamp` DESC ");
if(mysql_num_rows($allPostsQuery) < 1) {
    echo "No comments were found!";
} else {
    while($comment = mysql_fetch_assoc($allPostsQuery)) {
    	echo "<div class = comments>";
    	echo "<b> " .date("D M d, Y g:sA",$comment['timestamp']). "<br> </b>";
        echo "<b> {$comment['email']} </b> <br> <br>";
        echo "<b> {$comment['name']} </b> <br>";
        echo "{$comment['message']} <br> <br>";
        echo "</div> <hr/>";
            }
}
?>
	
	</div>
</div>
         <footer> Paulo Aguiar (2013) </footer>

</body>
</html>
