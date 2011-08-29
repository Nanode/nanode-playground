<?php
	$datastream0=$_POST["datastream0"];
	$datastream1=$_POST["datastream1"];
	$datastream2=$_POST["datastream2"];
	$datastream3=$_POST["datastream3"];    
	require_once( 'pachube_functions.php' );
	
	$api_key = "your_api_key_here";
	$feed_id = "your_feed_id_here";	
	$data = "0,$datastream0\n1,$datastream1\n2,$datastream2\n3,$datastream3";
	
	$pachube = new Pachube($api_key);
	$url = "http://api.pachube.com/v2/feeds/".$feed_id.".csv";
	$update_status = $pachube->updatePachube ( $url, $data );
	$pachube->debugStatusCode($update_status); //
?>
