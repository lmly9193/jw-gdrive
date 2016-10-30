<!DOCTYPE html>
<html>
<head>
	<title>Video Embedding System</title>
	<meta charset="UTF-8"/>
	<script src="jwplayer/jwplayer.js"></script>
	<script src="jwplayer/provider.html5.js"></script>
	<script src="jwplayer/key.js"></script>
	<link rel="stylesheet" type="text/css" href="jwplayer/skins/seven.css">
	<link rel="stylesheet" type="text/css" href="jwplayer/skins/newtab.css">
</head>
<body>
	<?php require_once("curl.php");?>
	<div id="videoContainer">影片載入中...</div>
	<script type="text/JavaScript">
		var playerInstance = jwplayer("videoContainer");
		playerInstance.setup({
			title: "<?php echo $title;?>",
			//description: "",
			image: "<?php echo $shot;?>",
			//mediaid: "",
			sources: [<?php require_once("source.php");?>],
			mute: "false",
			autostart: "true",
			repeat: "false",
			abouttext: "lmly9193.github.io",
			aboutlink: "https://lmly9193.github.io",
			height: "100%",
			width: "100%",
			displaytitle: "true",
			displaydescription: "true",
			stretching: "uniform",	// "uniform","exactfit","fill","none"
			primary: "html5",
			flashplayer: "jwplayer/jwplayer.flash.swf",
			preload:"metadata",	//"none","metadata","auto"
			skin: {
				name: "seven",
			},
			//logo: {
			//	file: "/assets/logo.png",
			//	hide: "false",
			//	link: "https://lmly9193.github.io",
			//	margin: "8",
			//	position: "top-left",
			//},
			sharing:{
			    link: "<?php echo $sharing;?>",
			    code: "<iframe src='<?php echo $sharing;?>' width='640' height='360' frameborder='0' scrolling='auto'></iframe>",
				heading: "分享",
				sites: ["facebook","twitter","tumblr","googleplus","reddit","linkedin","interest","email"],
			},
		});
	</script>
</body>
</html>
