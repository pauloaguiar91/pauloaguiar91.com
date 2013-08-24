<?php

require_once('../scripts/config.php');

    $function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
    	
    	 case('logIn'):
    	 if(file_exists('chat.txt')) {
    	 	$nickname = htmlentities(strip_tags($_POST['nickname']));
    	 	
    	 	if($nickname) {
    	 		mysql_query("insert into online_users (username) values ('$nickname')");
		 	
		 		
			 	$chat = fwrite(fopen('chat.txt', 'a'), "<i> <span>". $nickname . "</span>" . " has joined the chat" . "</i> \n");
			 	fclose($chat);
			 	
			 	$users =fwrite(fopen('users.txt', 'a'), $nickname . "\n");
		 		fclose($users);
			 	
			 	
    	 	}
    	 }	
    	 	break;
    	 	
    	 case('logOut'):
    	 		$nickname = htmlentities(strip_tags($_POST['nickname']));

	    	 	fwrite(fopen('chat.txt', 'a'), "<i> <span>". $nickname . "</span>" . " has left the chat" . "</i> \n");
			 	
			 	mysql_query("DELETE FROM online_users WHERE (username)='$nickname';");
    	 
    	 break;
    	 
    	 case('getState2'):
    	 if(file_exists('users.txt')) {
	    	   $lines2 = file('users.txt');

    	 }
    	      $log['state2'] = count($lines2);

    	 break;
    
    	 case('getState'):
        	 if(file_exists('chat.txt')){
               $lines = file('chat.txt');
        	 }
        	 
             $log['state'] = count($lines); 
        	 break;	
        	 
         case('updateUsers'):
         
         $state = $_POST['state2'];
        	if(file_exists('users.txt')){
        	   $lines2 = file('users.txt');
        	 }
        	 $count =  count($lines2);
        	 
        	 if($state == $count){
        		 $log['state'] = $state;
        		 $log['users'] = false;
        		 
        		 }
        		 else{
        			 $users= array();
        			 $log['state'] = $state + count($lines2) - $state;
        			 foreach ($lines2 as $line_num => $line)
                       {
        				   if($line_num >= $state){
                                $users[] =  $line = str_replace("\n", "", $line);
        				   }
         
                        }
        			 $log['users'] = $users; 
        		 }

         
         break;
    	
    	 case('update'):
        	$state = $_POST['state'];
        	if(file_exists('chat.txt')){
        	   $lines = file('chat.txt');
        	 }
        	 $count =  count($lines);
        	 if($state == $count){
        		 $log['state'] = $state;
        		 $log['text'] = false;
        		 
        		 }
        		 else{
        			 $text= array();
        			 $log['state'] = $state + count($lines) - $state;
        			 foreach ($lines as $line_num => $line)
                       {
        				   if($line_num >= $state){
                         $text[] =  $line = str_replace("\n", "", $line);
        				   }
         
                        }
        			 $log['text'] = $text; 
        		 }
			
        	  
             break;
    	 
    	 case('send'):
		  $nickname = htmlentities(strip_tags($_POST['nickname']));
			 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			  $message = htmlentities(strip_tags($_POST['message']));
		 if(($message) != "\n"){
        	
			 if(preg_match($reg_exUrl, $message, $url)) {
       			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);
				} 
			 
        	
        	 fwrite(fopen('chat.txt', 'a'), "<span>". $nickname . ":</span> " . $message = str_replace("\n", " ", $message) . "\n"); 
		 }
        	 break;
    	
    }
    
    echo json_encode($log);

?>