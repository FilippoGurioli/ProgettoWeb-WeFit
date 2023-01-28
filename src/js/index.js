function generatePosts(posts){
    let result = "";
    for(let i=0; i < posts.length; i++){
        let articolo = //`
        <section class="post">
			<header>
				<div class="container">
					<img class="profile-pic" alt="Immagine di profilo" src="./upload/profile_pictures/WeFitPic.png"/>
					<div class="name">${posts[i]["User"]}</div>
				</div>
			</header>
			<section>
				<div class="comment">${posts[i]["Comment"]}</div>
				<div class="training-plan"><?php echo $post["postTraining"]; ?></div>
				<div class="photo-container">
				<img class="photo" onCLick="openPhoto()" alt="" src="<?php echo UPLOAD_DIR.$post["postImage"]; ?>">
				</div>
				<div class="weight">Il peso di oggi è: <?php echo $post["weight"]; ?></div>
			</section>
			<footer>
				<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
				<section class="comment-section">
				</section>
			</footer>
		</section>
        `;
        result += articolo;
    }
    return result;
}

axios.get('api-post.php').then(response => {
    console.log(response);
    let posts = generatePosts(response.data);
    const main = document.querySelector("main");
    main.innerHTML = posts;
});