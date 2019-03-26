<?php

include 'connect.php';
	
$sql ="select * from mirror";
$result=$db->query($sql);

foreach ($result as $row) {
	echo $row['temp'].'°C';
}

?>