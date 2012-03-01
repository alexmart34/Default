<?php 

$pass = array('news','020210',);

if (in_array($_GET['id'], $pass)) {
	include ('../news/' . $_GET['id'] . '.php'); 
} 

elseif (!isset($_GET['id'])) {
	include ("../news/news.php"); 
}

?>