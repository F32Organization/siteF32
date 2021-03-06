<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Modded Edition of Faithful 32x">
    <meta name="keywords" content="faithful, faithful mod support, faithful 32, faithful modded, f32, f32me, f32 modded edition, faithful 32 modded edition, faithful 32 me">
    <meta name="robots" content="index, follow">
    <title>Faithful 32 - Modded Edition</title>
    <link rel="shortcut icon" type="image/ico" href="favicon1.png">
	<style>
	a {
		text-decoration: none;
		color: #6A75E8;
	}
		a:hover {
		color: #9098EA;
	}
	#logo {
		text-align: center;
		text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);
	}
	.button {
		float: left;
		text-align: center;
	}
	.button a {
		display: block;
		padding: 7px 10px;
		border-radius: 5px;
		border: 0px;
		color: #222222 !important;
		text-decoration: none;
		margin: 7px;
		background-color: #fafafa;
		box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);
	}
	.button a:hover {
		background-color: #c0c0c0;
	}
	#text {
		padding: 7px 10px;
	}
	.clear {
		clear: both;
	}
	.shh, a:hover span { display: none }
	a:hover .shh { 
		word-wrap: break-word;
		display: inline ;
	}
	</style>
</head>
<body bgcolor="#262626" style="font-size:100%;color:#FFFFFF;padding-left:10%;padding-right:10%;">
<font face="'Open Sans', verdana, sans-serif">
<h1 id="logo">Faithful 32 <span style="color: #0026FF">Modd</span><span style="color: #32A800">ed Edi</span><span style="color: #E50000">tion</span></h1>

<div class="button" style="width:50%;">
    <a href="http://www.f32.me/F32-1.10.2.zip">
        <b>Download - Latest Pack - (1.10.2)</b>
		<br>
        <span><?php echo "Last rebuilt: ".date("F d Y H:i",@filemtime("F32-1.10.2.zip")); ?></span>
		<span class="shh"><?php $my_file = @fopen("sum1102.txt", "r"); echo "md5 hash value: "; echo @fgets($my_file); @fclose($my_file); ?></span>        
    </a>
</div>
<div class="button" style="width:50%;">
    <a href="http://www.f32.me/F32-1.7.10.zip">
        <b>Download - Latest Pack - (1.7.10)</b>
		<br>
        <span><?php echo "Last rebuilt: ".date("F d Y H:i",@filemtime("F32-1.7.10.zip")); ?></span>
		<span class="shh"><?php $my_file = @fopen("sum1710.txt", "r"); echo "md5 hash value: "; echo @fgets($my_file); @fclose($my_file); ?></span>  
    </a>
</div>
<br class="clear">
<div class="button" style="width:100%;">
    <a href="http://www.f32.me/old">
        Older Packs (1.6.4 & 1.5.2 & 1.4.7)
    </a>
</div>
<div class="button" style="width:100%;">
    <a href="http://www.f32.me/mods">
        Individual Mod Support
    </a>
</div>
<br class="clear">
<div id="text">
    <p>
        <a href="https://github.com/F32Organization">Assistance, comments, concerns, and issues on Github.</a>
    </p>
<hr>	
    <p id="credits" style="font-size:100%;">
        Credit:
		<br></br>
		Hosting provided by Greenphlem.
		<br></br>
        <a href="http://www.minecraftforum.net/forums/mapping-and-modding/resource-packs/1223254">
            Vanilla pack by Vattic.
        </a>
		<br></br>

    </p>
</div>
</font>
</body>
</html>