<?php if(count($templateParams["post"])!=0):
		$post = $templateParams["post"][0];
?>
<section class="post">
	<header>
		<div class="container">
			<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png"/>
			<div class="name">Nome</div>
		</div>
	</header>
	<section>
		<?php if($post["postComment"] != 0): ?>
		<div class="comment"><?php echo $post["postComment"]; ?></div>
		<?php endif; ?>
		<?php if($post["postTraining"] != 0): ?>
		<div class="training-plan"><?php echo $post["postTraining"]; ?></div>
		<?php endif; ?>
		<?php if($post["postImage"] != 0): ?>
		<div class="photo-container">
			<img class="photo" onCLick="openPhoto()" alt="" src="<?php echo UPLOAD_DIR.$post["postImage"]; ?>">
		</div>
		<?php endif; ?>
		<?php if($post["weight"] != 0): ?>
			<div class="weight">Il peso di oggi è: <?php echo $post["weight"]; ?></div>
		<?php endif; ?>
		
	</section>
	<footer>
		<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
		<section class="comment-section">
		</section>
	</footer>
</section>