<?php declare(strict_types=1);
// HTTP2 Push
include_once("./parts/preload.php");
header("Link: </css/about.css>; as=style; rel=preload", false);

$fileName = basename(__FILE__, '.php');
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<?php include_once("./parts/head.html") ?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>PSBN</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" href="css/about.css" type="text/css" />
<!-- InstanceEndEditable -->
</head>

<body class="light">
	<?php include_once("parts/header.php") ?>
	<div class="card">
		<!-- InstanceBeginEditable name="card" -->
		<div class="content">
			<div class="picture" style="background-image: url('images/psbn.png');"></div>
			<div class="info">
				<span class="title">PSBN</span>
				<span class="subtitle">iOS App</span>
				<hr>
				<p>Stay connected to live sports and shows from PSBN (Peoria Student Broadcast Network) - wherever and whenever you want them. Download the FREE PSBN app to your iPhone, iPad or iPod touch and get 24/7 access to live streaming feeds from PSBN. PSBN is available to fans of high school athletics, performing arts, and educational programing</p>
			</div>
		</div>
		<footer><a href="https://github.com/demosjarco/PSBN"><i class="fab fa-github"></i></a></footer>
		<!-- InstanceEndEditable -->
	</div>
	<!-- InstanceBeginEditable name="Main Body" -->
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/3B2G07P0sBA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg">
				<p>PSBN, the Peoria Student Broadcasting Network, is a unique Peoria Unified program that gives students the opportunity to go hands on in the field of live broadcasting. PSBN students from across the district work to produce and stream a variety of sports, arts, and news content to a worldwide audience. </p>
				<p>I have created the iOS app to make it easier for every fan and supporter to be able to watch anytime, anywhere</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg">
				<div class="card">
					<img src="images/psbn/iPhone_1.png" class="card-img-top fit">
					<div class="card-body">
						<h6 class="card-subtitle text-muted">iPod Touch</h6>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="images/psbn/iPhone6P_1.png" class="card-img-top fit">
					<div class="card-body">
						<h6 class="card-subtitle text-muted">iPhone 6P</h6>
					</div>
				</div>
			</div>
			<div class="col-lg">
				<div class="card">
					<img src="images/psbn/iPadP_1.png" class="card-img-top fit">
					<div class="card-body">
						<h6 class="card-subtitle text-muted">iPad Pro</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- InstanceEndEditable -->
	<?php include_once("./parts/footer.html") ?>
</body>
<!-- InstanceEnd --></html>