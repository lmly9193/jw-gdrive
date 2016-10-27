<?php
	preg_match_all("/([^\|]+)\|/", $response_data, $source);
	for($i = 1; $i < count($source[0]); $i++) {
		$source[1][$i] = preg_replace("/[^\/]+\.googlevideo\.com/", "redirector.googlevideo.com", $source[1][$i]);
		preg_match("/itag=(?:5|17|18|22|34|35|36|37|38|43|44|45|46|82|84|102|104)/", $source[1][$i], $itag);
		require("switch.php");
		if($i == 1) {
			echo '{file: "'.$source[1][1].'",label: "'.$label.'",type: "video/mp4",default: "true"},';
		} else {
			echo '{file: "'.$source[1][$i].'",label: "'.$label.'",type: "video/mp4"},';
		}
	}
?>