<?php
//This is the Media Page that Contains the Links of the Media Show
//Here your motive is to secure the $user_id and $media_id from unauthorized URL Tempering Attempt
//Here we are generating key for both this variables 

$key = UTemp($user_id);
$mediak = UTemp($media_name);
//Here we passing both variables and their keys to URL
//If any one tries to Change value of any variable value will not match
echo '<a href="show.php?mname='.$media_name.'&uid='.$user_id.'&c='.$key.'&l='.$mediak.'" target="_blank" >';



//Made with love by Remold Enterprise. 
//www.remold.in
?>
