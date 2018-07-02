<?php
	$ch = curl_init();
	
	$url = "https://github.com/openfootball/world-cup.json/blob/master/2018/worldcup.groups.json";

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$hasil = curl_exec($ch);
	var_dump($hasil);
	
curl_close($ch);
	
?>