
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Slot Machine</title>
<?php
include 'head.php';
?>
<style>
body {
	font-family:verdana,arial;
	padding:20px;
}
.bd {
	text-align:center;
}
.container {
	margin:0 auto;
	width:266px;
}
.slot-wrapper {
	 border: 1px solid #000000;
}
.slot {
	background:url("images/reel_normal.png") repeat-y; /*Taken from http://www.swish-designs.co.uk*/
	width:86px;
	height:70px;
	float:left;
	border:1px solid #000;
	background-position:0 4px;
}
.motion {
	background:url("images/reel_blur.png") repeat-y; /*Taken from http://www.swish-designs.co.uk*/
}
button {
	display:block;
	width:138px;
	height:33px;
	margin:20px 60px;
	font-size:16px;
	cursor:pointer;
}
#result {
	margin:20px 0;
	font-size:18px;
	font-weight:bold;
	height:22px;
}
.credits {
	font-size:15px;
	margin-top:20px;
}
.credits .browsers {
	font-style:italic;
	font-size:14px;
	color:#777;
	margin-top:4px;
}
.clear {
	clear:both;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="scripts/slot_machine/jquery.spritely.js"></script>
<script src="scripts/slot_machine/jquery.backgroundPosition.js"></script>
<script src="scripts/slot_machine/slot.js"></script>
</head>

<body>
	<div  class="wrapper">
		<h1>JS/jQuery Slot Machine</h1>
		<?php
		include 'navbar.php';
		?>
<div class="hd">
</div>
<div class="bd">
	<h2>Good luck!</h2>
	<br>
	<div class="container">
		<div class="slot-wrapper">
			<div id="slot1" class="slot"></div>
			<div id="slot2" class="slot"></div>
			<div id="slot3" class="slot"></div>
			<div class="clear"></div>
		</div>
		<div id="result"></div>
		<div><button id="control" class="button">Start</button></div>
	</div>
	<br>
	<div class="credits">
		<div>Based on code written by <a href="http://odhyan.com/blog/" style="color:#2b1818!important; font-weight: 900!important;">Saurabh Odhyan</a></div>
	</div>
</div>
<div class="push"> </div>

</div>

<?php
include 'footer.php';
?>

</body>


</body>
