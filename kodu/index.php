<?php // See fail juhib lehte.
require_once("functions_koduleht.php");	// kaasab funktsioonid
//require_once("funk.php");
start_session();
		
// mode-i abil kuvatakse pealeht
$mode="index";				

// see otsib get ja post tüüpi muutujaid, et otsustada, mis lehte kuvada
if (isset($_REQUEST['mode']) && $_REQUEST['mode']!=""){
	$mode=$_REQUEST['mode'];
	}	
		
//lisan kujunduse päise
include_once("view/head.html");

switch($mode){

case "index":
	include_once("view/index.html");
break;
case "about":
	include_once("view/about.html");
break;
case "dogs":
	include_once("view/dogs.html");
break;case "terms":
	include_once("view/terms.html");
break;
case "pictures":
	include_once("view/pictures.html");
break;
case "contact":
	include_once("view/contact.html");
break;

	break;				
	default:
// lisame index.html faili sisu selle faili juurde
include("view/index.html");
}

//lisame kujunduse jaluse
include_once("view/foot.html");

?>