<?php 

function start_session(){
	session_start();
	}
	
function end_session(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {	// PHP transparently supports HTTP cookies. Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 
 	 setcookie(session_name(), '', time()-42000, '/'); // sessiooni algab, cookie lõpetab töö koheselt lehe sulgemisel -42000 näitab, aega 12 h tagasi.
	}
	session_destroy();
}

?>
