<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <title>Posting...</title>
</head>
<body>
<?php
require_once 'config.php';
$fields = array("name", "email", "message");
 
$isOkay = TRUE;
 
 
foreach ($fields as $field) {
    if (empty($_POST[$field])) {
        $isOkay = FALSE;
    }
    if(strlen($name) > 20) {
        $isOkay = FALSE;
	    echo 'Name is too long!';
	    return;
	}
	
	if(!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		$isOkay = FALSE;
		echo 'Not a valid email';
		return;
		
	}
}
    

if ($isOkay) {
    extract($_POST);
    $now = time();
    
    if (mysql_query("insert into comments (name,email,message,timestamp ) values ('{$name}','$email','$message','{$now}')")) {
    mysql_real_escape_string($message)
    //used some javascript here because the header('Location:') stuff was giving errors. 
      ?> <script> window.location = "http://pauloaguiar91.com/blog.php"; </script> <?php
    } else {
        echo "There was an error connecting to the database!";
    }
} else {
    echo "One or more fields are empty!";
}
?>
 
</body>
</html>