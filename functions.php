<?php
//How to Secure your Web page from URL Tempering
//Here you need to define one key let's say $mykey "Any name you can give"
//Here $id is the value you passed in Temper Function in Media Page 
//$id can be a media name or user id or whatever you want to prevent tempering

//Tempering Function 
	function UTemp($id){
		$mykey = 'writeyourowntexthere';
		$key = md5($id.$mykey);
		return $key;
	}
	
//Made with love by Remold Enterprise. 
//www.remold.in
?>
