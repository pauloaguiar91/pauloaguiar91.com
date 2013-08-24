
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A webpage dedicated to Paulo Aguiar's software and projects.">
    <meta name="author" content="Paulo Aguiar">

    <title>ChatCS</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../styles/styles.css" rel="stylesheet">
    <script type="text/javascript" src="../scripts/jquery-1.10.2.min.js"></script>

    <link rel="stylesheet" href="../styles/chatstyle.css" type="text/css" />
    <script type="text/javascript" src="../scripts/chat.js"></script>
    
    	<script type="text/javascript">
		 setInterval('chat.updateUsers()', 1200)
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", " ");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	    	
    	// kick off chat
        var chat =  new Chat();
        chat.logIn(name); 
           

		window.onbeforeunload=function(e) {
        	chat.logOut(name);
		}
        
    	$(function() {
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>
    
  </head>

  <body onload="setInterval('chat.update()', 1300)">

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
            <li><a href="../index.html">Home</a></li>
            <li><a href="../about.html">About</a></li>
            <li><a href="../blog.php">Blog</a></li>
             <li><a href="..//misc/paresume.pdf">Resume</a></li>
             <li class="active"><a href="index.html"> Projects </li></a>
          </ul>
          <div class = "socialLinks"> 
            <a href = "https://github.com/pauloaguiar91"><img src = "../img/github.png" /> </a>
            <a href = "https://www.facebook.com/paulo.aguiar91"><img border="0"src = "../img/facebook.gif" /> </a>
            <a href = "../https://twitter.com/PauloAguiar91"><img src = "../img/twitter.gif" /> </a>
            <a href = "https://plus.google.com/108964831820304030474/posts"><img src = "../img/gplus.png" /> </a>
            <a href = "http://www.linkedin.com/pub/paulo-aguiar/52/aa/294"><img src = "../img/linkedin.png" /> </a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class ="container">
      <h1> ChatCS </h1>
        <div class = "col-lg-9"> 
			<div class="row">

    <div id="page-wrap">
        
        <p id="name-area"></p> </div>
        
        <div id="chat-users"> <h2> Whos Online </h2>
		    	
        
        
        </div>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">

            <textarea id="sendie" maxlength = '100' ></textarea> 

        </form>
    
    </div>
			
		</div>

      <div class = "col-lg-3">
        <span class ="techUsed"> Tech Used: </span> <br> <BR>
        <span class ="text">
        <ul>
            <li> HTML5</li>
            <li> CSS </li>
            <li> jQuery </li>
            <li> Javascript </li>
            <li> PHP</li>
            <li> Ajax </li>
            <li> MySQL </li>
            <li> JSON </li>
        </ul>
        
        
        	Latest Updates (v0.2) 
        	<ul>
        		<li> Added message for users logging in to the chat </li>
        		<li> Fixed scrollbar being stuck to the bottom </li>
        		<li> Added whos online front-end... Working on some server stuff now to get that working.</li>
        		<li> disabled resizing on the input textarea.
        		<li> <i> Added message for users logging out of the chat </i> </li>
        		
         </span>
    </div>
    </div>

         <footer> Paulo Aguiar (2013) </footer>
</body>
</html>