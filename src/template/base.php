<!DOCTYPE html>
<html lang="it">
    <head>
        <title><?php echo $templateParams["titolo"]; ?></title>
        <?php
		if(isset($templateParams["css"])):
			foreach($templateParams["css"] as $style):
		?>
			<link rel="stylesheet" type="text/css" href="./css/<?php echo $style; ?>.css"/>
		<?php
			endforeach;
		endif;
		?>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <main>
            <?php
                if(isset($templateParams["nome"])) {
                    require($templateParams["nome"]);
                }
            ?>
        </main>
		<?php 
			if(isset($navbarVisible) && $navbarVisible):
		?>
		<nav>
			<form id="search-bar">
				<input type="text" id="searchedTxt" placeholder="Inserisci il nickname..."></input>
				<button type="submit" class="btn" onCLick="startSearch()">🔎</button>
			</form>
			<ul>
				<li><a href="home-redirector.php" id="nav-selected">🏠</a></li>
				<li><a href="profile-redirector.php">👨🏻‍💼</a></li>
				<li><a href="notifications-redirector.php">📨</a></li>
				<li><input type="button" onCLick="openSearch()" value="🔎"></input></li>
				<li><a href="create-post-redirector.php">➕</a></li>
			</ul>
		</nav>
		<?php endif; ?>
		<?php
		if(isset($templateParams["js"])):
			foreach($templateParams["js"] as $script):
		?>
			<script src="<?php echo $script; ?>"></script>
		<?php
			endforeach;
		endif;
		?>
    </body>
</html>