<?php
	preg_match("/&fmt_stream_map=.*&fmt_list=/", $response_data, $source_data);
	preg_match_all("/([^\|]+)\,\d*/", preg_replace("/&fmt_list=/", ",", preg_replace("/&fmt_stream_map=/", Null, implode($source_data))), $source);
	for($i = 0; $i < count($source[0]); $i++) {
		$source[1][$i] = preg_replace("/[^\/]+\.googlevideo\.com/", "redirector.googlevideo.com", $source[1][$i]);
		preg_match("/itag=(?:5|17|18|22|34|35|36|37|38|43|44|45|46|82|84|102|104)/", $source[1][$i], $itag);
		require("switch.php");
		echo '{file: "'.$source[1][$i].'",label: "'.$label.'",type: "video/mp4"},';
	}
?>
