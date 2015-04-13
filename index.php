<!DOCTYPE html>
<html lang="en">
	<link rel="shortcut icon" type="image/ico" href="favicon.png" />
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Faithful 32 - Modded Edition</title>
        <link href="Style.css" rel="stylesheet">
		<script type="text/javascript">
			var _gaq = _gaq || [];
  			_gaq.push(['_setAccount', 'UA-49976593-1']);
  			_gaq.push(['_trackPageview']);
  			(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  			})();
		</script>
	</head>
	<body>
		<!-- Logo -->
		<h1>Faithful 32 <span style="color: #0026FF">Modd</span><span style="color: #32A800">ed Edi</span><span style="color: #E50000">tion</span></h1>
		<!-- 1.7.10 DL -->
		<b><a href="http://www.f32.me/F32-1.7.10.zip">Latest Pack (1.7.10)</a></b>
		<!-- Fetch and display last time file was modified. -->
		<?php
		// Output example: Last rebuilt: March 27 2015 22:16:23.
		echo "Last rebuilt: ".date("F d Y H:i:s.",filemtime("F32-1.7.10.zip"));
		?>
		<br><br>
		<!-- Fetch md5 value from build script file and display. -->
		<?php
		$myfile = fopen("./git/old1710sum.md5", "r");
		echo "md5 hash value: ";
		echo fgets($myfile);
		fclose($myfile);
		?>
		<br><br>
  		<!-- 1.6.4 DL -->
		<b><a href="http://www.f32.me/F32-1.6.4.zip">Latest Pack (1.6.4)</a></b>
		<!-- Fetch and display last time file was modified. -->
		<?php
		// Output example: Last rebuilt: March 27 2015 22:16:23.
		echo "Last rebuilt: ".date("F d Y H:i:s.",filemtime("F32-1.6.4.zip"));
		?>
		<br><br>
		<!-- Fetch md5 value from build script file and display. -->
		<?php
		$myfile = fopen("./git/old164sum.md5", "r");
		echo "md5 hash value: ";
		echo fgets($myfile);
		fclose($myfile);
		?>
		<br><br>
		<!-- 1.5.2 & 1.4.7 DL -->
		<a href="http://www.f32.me/old">Older Packs (1.5.2 & 1.4.7)</a>
		<br><br>
		<!-- 1.7.10 Mod Support -->
		<a href="http://www.f32.me/1710">Individual Mod Support (1.7.10)</a>
		<br><br>
		<!-- 1.6.4 Mod Support -->
		<a href="http://www.f32.me/164">Individual Mod Support (1.6.4)</a>
		<br><br>
		<!-- 1.7.10 Github -->
		<a href="https://github.com/F32Organization/Faithful32-1.7.10">Github (1.7.10 version)</a>
		<br><br>
		<!-- 1.6.4 Github -->
		<a href="https://github.com/F32Organization/Faithful32-1.6.4">Github (1.6.4 version)</a>
		<p>Please submit issues on Github if you have any questions, comments, or concerns.</p>
		<p>Specific texture requests are acceptable.</p>
		<br><br>
		<footer>
			<p style="font-size: 75%;">Credit to:</p>
		    <p style="font-size: 75%;">Greenphlem: Site hosting</p>
			<p style="font-size: 75%;">DZCreeper: Initial design</p>
			<p style="font-size: 75%;">Vattic: Vanilla pack</p>
			<p style="font-size: 75%;"><a href="https://github.com/F32Organization/Faithful32-1.7.10/graphs/contributors">Github Contributors</a> + Third Parties: Mod textures</p>
		</footer>
	</body>
</html>
