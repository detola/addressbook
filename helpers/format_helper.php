<?php 
function formatDate($date){
	$date = date("F j, Y, g:i a",strtotime($date));
	return $date;

 }
 ?>
