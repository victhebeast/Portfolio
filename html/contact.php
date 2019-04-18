<?php declare(strict_types=1);
// HTTP2 Push
include_once("./parts/preload.php");
header("Link: </images/close-up-code-coding-239898.png>; rel=preload; as=image", false);

$fileName = basename(__FILE__, '.php');
?>
<!doctype html>
<html>
<head>
	<?php include_once("./parts/head.html") ?>
	<title>Contact</title>
</head>

<body class="light">
	<?php include_once("parts/header.php") ?>
	<div class="card">
		<div class="content">
			<form action="">
				<input type="text" required placeholder="Name" />
				<input type="email" required placeholder="Email" />
				<textarea required placeholder="Type your inquiry here"></textarea>
				<input type="hidden" />
				<input type="submit" />
			</form>
		</div>
		<footer></footer>
	</div>
	<?php include_once("./parts/footer.html") ?>
</body>
</html>