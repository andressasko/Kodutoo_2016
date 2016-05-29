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
//RENAME TABLE asasko_kutsikad TO asasko_kutsikad;
//ALTER TABLE asasko_kutsikad ADD hind int(6);
function kuva_kutsikad(){
	
	global $connection;
	$query = 'SELECT * FROM asasko_kutsikad';
	$result = mysqli_query($connection, $query);
/*	
	while ($kutsikas=mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$kutsikas['id']."</td>";
	echo "<td>".$kutsikas['nimi']."</td>";
	echo "<td>".$kutsikas['vanus']."</td>";
	echo "<td>".$kutsikas['hind']."</td>";
	echo "</tr>";
	} //end while
*/
	while ($kutsikas=mysqli_fetch_assoc($result)) {
	$id = $kutsikas['id'];
	$nimi = $kutsikas['nimi'];
	$vanus = $kutsikas['vanus'];
	$hind = $kutsikas['hind'];
	echo "<p>ID: $id <br /> Nimi: $nimi <br /> Vanus: $vanus<br />Hind: $hind</p>";
	} //end while


	
}
?>



	
			