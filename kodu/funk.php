<?php
function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}


function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function kuva_puurid(){
	// siia on vaja funktsionaalsust
	global $connection;
	$query = 'SELECT DISTINCT puur FROM asasko2_loomaaed ORDER BY puur ASC';
	$result = mysqli_query($connection, $query);
	
	$puurid = array();
	
	while($puuri_nr = mysqli_fetch_assoc($result)){
	$query_2 = 'SELECT * FROM asasko2_loomaaed WHERE puur = '.mysqli_real_escape_string($connection, $puuri_nr['puur']);
	$result_2 = mysqli_query($connection, $query_2);
	
	}
	echo $puurid;
	


}

?>