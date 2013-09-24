<?php
	// Check for Original Parameter Values
	$get_ukey = $_GET['uid'];
	$get_mkey = $_GET['mname'];
	// Check for Original Parameter Key Values
	$get_utkey = $_GET['c'];
	$get_mtkey = $_GET['l'];
	
	//If the both Original Parameter Values are not null then ...
	if(($get_ukey != "") && ($get_mkey != ""))
	{ 
		$ukkey = UTemp($get_ukey);
		$mkkey = UTemp($get_mkey);
		if(($ukkey != $get_utkey) && ($mkkey != $get_mtkey))
		{
			// REDIRECT USER TO LOG.PHP OR OTHER LOCATION IF THEY TRY TO TAMPER
			header("location: http://www.somedomain.com/log.php");
			exit;
		}
	}

//Made with love by Remold Enterprise. 
//www.remold.in
?>
