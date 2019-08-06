<?php
$aboutClass = ($fileName == 'index') ? ' class="current"' : '';
$contactClass = ($fileName == 'contact') ? ' class="current"' : '';
$iclolClass = ($fileName == 'iclol') ? ' class="current"' : '';
$dankbeatsClass = ($fileName == 'dankbeats') ? ' class="current"' : '';
$psbnClass = ($fileName == 'psbn') ? ' class="current"' : '';
?>
<header>
	<div class="background"></div>
	<div class="darken"></div>
	<a href="https://www.demosjarco.dev/">
		<div id="logo"></div>
	</a>
	<nav>
		<label class="switch">
			<input type="checkbox" onChange="manualDarkMode(this.checked)">
			<span class="slider round fas fa-sun"></span>
		</label>
		<ul>
			<li><a href="https://www.demosjarco.dev/"<?php echo($aboutClass); ?>>About</a></li>
			<li><a href="https://www.demosjarco.dev/contact.php"<?php echo($contactClass); ?>>Contact</a></li>
			<li>
				<a href="#">Projects</a>
				<ul>
					<li><a href="https://www.demosjarco.dev/psbn.php"<?php echo($psbnClass); ?>>PSBN</a></li>
					<li><a href="https://www.demosjarco.dev/leagueinfocenter/"<?php echo($iclolClass); ?>>IC: LoL</a></li>
					<li><a href="https://www.demosjarco.dev/dankbeats.php"<?php echo($dankbeatsClass); ?>>Dank Beats</a></li>
					<li><a href="https://www.demosjarco.dev/no-cry-blackjack/">NCB</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</header>