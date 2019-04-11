<?php declare(strict_types=1);
// HTTP2 Push
include_once("./parts/preload.php");
header("Link: </css/about.css>; as=style; rel=preload", false);
header("Link: </images/close-up-code-coding-239898.png>; rel=preload; as=image", false);
header("Link: </images/logo.svg>; rel=preload; as=image", false);
header("Link: <https://use.fontawesome.com/releases/v5.8.1/css/all.css>; rel=preload; as=image; crossorigin", false);
header("Link: <https://fonts.googleapis.com/css?family=Lato:400,700|Roboto>; rel=preload; as=image; crossorigin", false);
?>
<!doctype html>
<html>
<head>
	<?php include_once("./parts/head.html") ?>
	<title>About</title>
	<link rel="stylesheet" href="css/about.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="light">
	<?php include_once("./parts/header.html") ?>
	<div class="card">
		<div class="content">
			<div class="picture"></div>
			<div class="info">
				<span class="hi">Hi</span>
				<span class="title">I'm <span class="name">Victor</span></span>
				<span class="subtitle">Web Developer and IT Operations Specialist</span>
				<hr>
				<p>I'm an Arizona based developer with skills ranging everywhere from full stack web programmer (HTML, PHP, NodeJS, ...) all the way to IT and Security Operations Specialist. I currently hold <a href="https://www.certmetrics.com/comptia/public/verification.aspx?code=PX1LKPH33DF4KJNG" target="_blank">CompTIA A+</a> and <a href="https://www.certmetrics.com/comptia/public/verification.aspx?code=D1J86P1MZP41QFG7" target="_blank">Network+</a> certifications (Security+ coming soon). I'm also a dual major student at MCC and GCC for Web Developer and Information Security.</p>
				</table>
			</div>
		</div>
		<footer>
			<a href="https://www.linkedin.com/in/vilisei/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
			<a href="https://github.com/demosjarco" target="_blank"><i class="fab fa-github"></i></a>
			<a href="https://stackoverflow.com/users/3745599/victor?tab=profile" target="_blank"><i class="fab fa-stack-overflow"></i></a>
		</footer>
	</div>
	<section class="school">
		<span class="title">School</span>
		<div class="tiles">
			<div class="tile"></div>
		</div>
	</section>
	<section class="work">
		<span class="title">Work</span>
		<div class="tiles">
			<div class="tile">
				<p class="singlemsg">This list is too small. You can help <a href="#">expand it. Hire me today!</a></p>
			</div>
		</div>
	</section>
	<section class="projects">
		<span class="title">Projects</span>
		<div class="tiles">
			<div class="tile"></div>
		</div>
	</section>
	<?php include_once("./parts/footer.html") ?>
</body>
</html>