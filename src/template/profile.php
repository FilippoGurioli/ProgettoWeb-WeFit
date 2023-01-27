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
			<a href="settings-redirector.php"><img src="./upload/WeFitLogo.png" alt="impostazioni del profilo"></a>
		<?php elseif(isset($isPersonalP) && $isPersonalP == false && !$templateParams["profile"]["friend"]): ?>
			<a id="btnFollow" href="#" onclick="follow();">➕</a>
		<?php else: ?>
			<a id="btnFollow" href="#" onclick="unfollow();">✔</a>
		<?php endif; ?>
		<div id="link">
			<a href="#">Follower: <label><?php echo $templateParams["profile"]["numFollower"];?></label></a>
			<a href="#">Seguiti: <label><?php echo $templateParams["profile"]["numFollowed"];?></label></a>
		</div>
	</header>
	<section id="obiettivo">
		<h1>Obiettivo</h1>
		<p>Peso: <?php echo $templateParams["profile"]["weightTarget"];?>kg</p>
		<p>Tempo limite: <?php echo $templateParams["profile"]["time"];?></p>
	</section>
</div>
<div id="placeholder"></div>
<!-------------------------------------------------------------------------------------------------------------->
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png">
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		<div class="training-plan">Allenamento: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		<div class="photo-container">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
			<img class="photo" alt="" src="./upload/WeFitImg.jpg">
		</div>
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
	</footer>
</section>