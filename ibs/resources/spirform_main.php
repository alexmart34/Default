<?php 

$pass = array('entry1','entry2','entry3');

if (in_array($_GET['id'], $pass)) {
	include ('../resources/' . $_GET['id'] . '.php'); 
} 

elseif (!isset($_GET['id'])) {
	include ("../resources/spirform.php"); 
}

?>