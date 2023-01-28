function generatePosts(posts){
    let result = "";
    for(let i=0; i < posts.length; i++){
        let post = `
        <section class="post">
			<header>
				<div class="container">
					<img class="profile-pic" alt="Immagine di profilo" src="./upload/${posts[i]["Photo"]}"/>
					<div class="name">${posts[i]["User"]}</div>
				</div>
			</header>
			<section>
				<div class="comment">${posts[i]["Comment"]}</div>
				<div class="training-plan">${posts[i]["Training"]}</div>
				<div class="photo-container">`;
		
			for(let j = 0; j < posts[i]["Images"].length; j++){
				post += `<img class="photo" alt="" src="` + posts[i]["Images"][j]["Image"] + `"/>`;
			}
			
			post +=	`</div>
				<div class="weight">Il peso di oggi è: ${posts[i]["Weight"]}</div>
			</section>
			<footer>
				<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
				<section class="comment-section">
				</section>
			</footer>
		</section>
        `;
        result += post;
    }
    return result;
}

const formData = new FormData();
let status = "home";
formData.append('person', status);
axios.post('api-post.php', formData).then(response => {
    console.log(response);
	let posts = generatePosts(response.data);
	const main = document.getElementById("post-container");
    main.innerHTML = posts;
});