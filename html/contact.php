<?php declare(strict_types=1);

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
			<form method="post">
				<input name="userName" type="text" required placeholder="Name" />
				<input name="userEmail" type="email" required placeholder="Email" />
				<textarea name="contactContent" required placeholder="Type your inquiry here"></textarea>
				<input name="submitted" type="hidden" value="true" />
				<input type="submit" />
			</form>
		</div>
		<footer></footer>
	</div>
	<?php include_once("./parts/footer.html") ?>
</body>
</html>