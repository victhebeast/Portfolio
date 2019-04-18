<?php
$aboutClass = ($fileName == 'index') ? ' class="current"' : '';
$contactClass = ($fileName == 'contact') ? ' class="current"' : '';
?>
<header>
	<div class="background"></div>
	<div class="darken"></div>
	<div id="logo"></div>
	<nav>
		<label class="switch">
			<input type="checkbox" onChange="manualDarkMode(this.checked)">
			<span class="slider round fas fa-sun"></span>
		</label>
		<ul>
			<li><a href="index.php"<?php echo($aboutClass); ?>>About</a></li>
			<li><a href="contact.php"<?php echo($contactClass); ?>>Contact</a></li>
		</ul>
	</nav>
</header>