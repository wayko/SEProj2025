<?php
	$IDNum = $_POST['idNum'];
	$TechID = $_POST['techIDNum'];
	require 'dbconfig.php';
	echo "ID Num: " . $IDNum . "TechID: " . $TechID;
?>