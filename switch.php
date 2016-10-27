<?php
	switch(preg_replace("/itag=/", Null, $itag[0])) {
		case 5:
			$label = "Low Quality, 240p, FLV, 400x240";
			break;
		case 17:
			$label = "Low Quality, 144p, 3GP, 176x144";
			break;
		case 18:
			$label = "Medium Quality, 360p, MP4, 480x360";
			break;
		case 22:
			$label = "High Quality, 720p, MP4, 1280x720";
			break;
		case 34:
			$label = "Medium Quality, 360p, FLV, 640x360";
			break;
		case 35:
			$label = "Standard Definition, 480p, FLV, 854x480";
			break;
		case 36:
			$label = "Low Quality, 240p, 3GP, 0x0";
			break;
		case 37:
			$label = "Full High Quality, 1080p, MP4, 1920x1080";
			break;
		case 38:
			$label = "Original Definition, MP4, 4096x3072";
			break;
		case 43:
			$label = "Medium Quality, 360p, WebM, 640x360";
			break;
		case 44:
			$label = "Standard Definition, 480p, WebM, 854x480";
			break;
		case 45:
			$label = "High Quality, 720p, WebM, 1280x720";
			break;
		case 46:
			$label = "Full High Quality, 1080p, WebM, 1280x720";
			break;
		case 82:
			$label = "Medium Quality 3D, 360p, MP4, 640x360";
			break;
		case 84:
			$label = "High Quality 3D, 720p, MP4, 1280x720";
			break;
		case 102:
			$label = "Medium Quality 3D, 360p, WebM, 640x360";
			break;
		case 104:
			$label = "High Quality 3D, 720p, WebM, 1280x720";
			break;
		default:
			$label = "transcoded (unknown) quality";
			break;
	}
?>