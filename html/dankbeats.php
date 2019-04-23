<?php declare(strict_types=1);
// HTTP2 Push
header("Link: </css/about.css>; as=style; rel=preload", false);
header("Link: </css/dankbeats.css>; as=style; rel=preload", false);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include_once("./parts/head.html") ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dank Beats</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" href="css/about.css" type="text/css" />
<link rel="stylesheet" href="css/dankbeats.css" type="text/css" />
<!-- InstanceEndEditable -->
</head>

<body class="light">
	<?php include_once("parts/header.php") ?>
	<div class="card">
		<!-- InstanceBeginEditable name="card" -->
		<img src="dankbeats/img/DankBeats.png" style="width: 100%;" />
		<!-- InstanceEndEditable -->
	</div>
	<!-- InstanceBeginEditable name="Main Body" -->
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<div class="card-body">
						<div id="profile" style="background-color: #7289da;">
							<div id="profileIcon"></div>
							<span id="botName"><span style="font-weight: bold; font-size: larger;">Dank Beats</span><span style="font-size: smaller; color: rgba(255,255,255,0.75)">#0979</span><span id="botTag">Bot</span></span>
						</div>
						<a href="https://discordapp.com/oauth2/authorize?client_id=281635696559652864&scope=bot&permissions=3148800" class="btn btn-primary">Add to DISCORD</a>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="dankbeats/img/bitrate.png" class="card-img-top" />
					<div class="card-body">
						<h5 class="card-title">Quality</h5>
						<p class="card-text">Why get a music bot that plays music in bad quality? Other discord music bots play music in 32-64kpbs or even lower. We give you all the bits you deserve! Whatever your bitrate is, even if you have 128kpbs because you're a partnered server, we will match it and play it in all its glory. If you change the quality after it its playing, just redo the play command.</p>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card bg-dark text-white">
					<img src="https://dm3381rcqf07k.cloudfront.net/multisite.insomniac.com/wp-content/uploads/sites/28/2017/04/updated_edc_logo1.png" class="card-img-top fit" />
					<img src="https://www.bonnaroo.com/wp-www-bonnaroo-com/wp/wp-content/uploads/2016/11/logo3.png" class="card-img-top fit" />
					<img src="https://d3vhc53cl8e8km.cloudfront.net/hello-staging/wp-content/uploads/sites/9/2018/03/08174606/hard-logo-white-compressor.svg" class="card-img-top fit" />
					<img src="https://www.lollapalooza.com/wp-www-lollapalooza-com/wp/wp-content/uploads/2014/05/lolla-logo.png" class="card-img-top fit" />
					<div class="card-body">
						<h5 class="card-title">EDM Festivals</h5>
						<p class="card-text">Replay the live sets played by famous artists from the TOP EDM festivals in the world. Enjoy 1+ hour sets from artists such as Dillon Francis, Alison Wonderland, Marshmellow, and more. You can search by artist, event, year, and/or location.</p>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="dankbeats/img/radio.png" class="card-img-top fit" />
					<div class="card-body">
						<h5 class="card-title">Live Radio</h5>
						<p class="card-text">We have handpicked 3 radio station that we enjoy that provide live dj-ing/mixing. You may visit their sites below by clicking on their logo or even listen to them with the player below. You can also send us more stations to add by <a href="https://www.demosjarco.dev/contact.php" target="_self">contacting us</a>.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<img src="dankbeats/img/top-logo.png" class="card-img-top fit" />
					<div class="card-body">
						<audio controls>
							<source src="https://ice42.securenetsystems.net/KKFR" type="audio/mpeg">
						</audio>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="dankbeats/img/live-1015-logo-web-header.png" class="card-img-top fit" />
					<div class="card-body">
						<audio controls>
							<source src="http://17813.live.streamtheworld.com:80/KALVFMAAC_SC" type="audio/mpeg">
						</audio>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="dankbeats/img/mx99-4-1024x205.jpeg" class="card-img-top fit" />
					<div class="card-body">
						<audio controls>
							<source src="http://38.107.243.219:8622/;" type="audio/mpeg" />
						</audio>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- InstanceEndEditable -->
	<?php include_once("./parts/footer.html") ?>
</body>
<!-- InstanceEnd --></html>