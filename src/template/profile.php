<div id="badgeContainer">
	<header id="badge">
		<img src="./upload/<?php echo $templateParams["profile"]["profilePic"]?>" alt="profile picture"/>
		<div id="dati">
			<h1><?php echo $templateParams["profile"]["username"];?></h1>
			<p><?php echo $templateParams["profile"]["birthday"];?></p>
			<p>Peso: <?php echo $templateParams["profile"]["weight"];?>kg</p>
			<p>Altezza: <?php echo $templateParams["profile"]["height"];?>cm</p>
		</div>
		<?php if(isset($isPersonalP) && $isPersonalP == true): ?>
			<a href="settings-redirector.php"><img src="./upload/icons/Options-icon.png" alt="impostazioni del profilo"></a>
		<?php elseif(isset($isPersonalP) && $isPersonalP == false && !$templateParams["profile"]["friend"]): ?>
			<a id="btnFollow" href="#" onclick="follow();"><img class="nav-icon" src="./upload/icons/Follow-icon.png"/></a>
		<?php else: ?>
			<a id="btnFollow" href="#" onclick="unfollow();"><img class="nav-icon" src="./upload/icons/Followed-icon.png"/></a>
		<?php endif; ?>
		<div id="link">
			<a href="follower-redirector.php">Follower: <label><?php echo $templateParams["profile"]["numFollower"];?></label></a>
			<a href="followed-redirector.php">Seguiti: <label><?php echo $templateParams["profile"]["numFollowed"];?></label></a>
		</div>
	</header>
	<section id="obiettivo">
		<h1>Obiettivo</h1>
		<p>Peso: <?php echo $templateParams["profile"]["weightTarget"];?>kg</p>
		<p>Tempo limite: <?php echo $templateParams["profile"]["time"];?></p>
	</section>
</div>
<div id="placeholder"></div>
<section id="post-container">

</section>
