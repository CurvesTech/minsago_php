<?php
 
 function mins_ago($timestamp) {
 	date_default_timezone_set('America/Los_Angeles');
 	$current_time = time();
 	$ret_val = '';
 	
 	$year = date('Y',$timestamp);
 	$month = date('n', $timestamp);
 	$day = date('j',$timestamp);
 	$hours = date('G',$timestamp);
 	$minutes = date('i',$timestamp);
 	$seconds = date('s',$timestamp);

 	$cyear = date('Y',$current_time);
 	$cmonth = date('n', $current_time);
 	$cday = date('j',$current_time);
 	$chours = date('G',$current_time);
 	$cminutes = date('i',$current_time);
 	$cseconds = date('s',$current_time);

 	/*echo $year.' '.$month.' '.$day.' '.$hours.' '.$minutes.' '.$seconds;
 	echo "<br>";
 	echo $cyear.' '.$cmonth.' '.$cday.' '.$chours.' '.$cminutes.' '.$cseconds;*/

 	if($cyear > $year) {
 		return $cyear - $year.' years ago';
 	} else if($cmonth > $month) {
 		return $cmonth - $month. ' months ago';
 	} else if($cday > $day) {
 		return $cday - $day.' days ago';
 	} else if($chours > $hours) {
 		return $chours - $hours.' hours ago';
 	} else if($cminutes > $minutes) {
 		return $cminutes - $minutes.' minutes ago';
 	} else {
 		return $cseconds - $seconds.' seconds ago';
 	}



 }
$some_time = '2014-12-04 21:51:05';
$timestamp = strtotime($some_time);
echo mins_ago($timestamp);

 ?>