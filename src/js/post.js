function generatePosts(posts){
    let result = "";
	for (let i = 0; i < posts.length; i++) {
		if (posts[i]["Weight"] != 0) {
			posts[i]["Weight"] = "Il peso di oggi è: " + posts[i]["Weight"] + "kg";
		} else {
			posts[i]["Weight"] = "";
		}
	}
    for(let i= 0; i < posts.length; i++){
        let post = `
        <section class="post">
			<header>
				<div class="container">
					<img class="profile-pic" alt="Immagine di profilo" src="./upload/${posts[i]["Photo"]}"/>
					<div class="name">${posts[i]["User"]}</div>
				</div>
			</header>
			<section>
				<div class="comment"><pre>${posts[i]["Comment"]}</pre></div>
				<div class="training-plan"><pre>${posts[i]["Training"]}</pre></div>
				<div class="photo-container">`;
		
			for(let j = 0; j < posts[i]["Images"].length; j++){
				post += `<img class="photo" alt="" src="./upload/` + posts[i]["Images"][j]["Image"] + `"/>`;
			}
			
			post +=	`</div>
				<div class="weight">${posts[i]["Weight"]}</div>
			</section>
			<footer>
			<form method="POST" action="#" id="form` + i + `" name="comments-form" class="comments-form">
				<input class="txt-comment" id="txt-c` + i + `"type="text" placeholder="Lascia un commento..."></input>
				<input class="btn-comment" type="submit" value="OK" style="display:none;"></input>
			</form>
				<section class="comment-section">`;
				
			for(let j = 0; j < posts[i]["Comments"].length; j++){
				post +=	`<div class="comment">
							<p href="" alt="Link al profilo">` + posts[i]["Comments"][j]["Author"] + `<p>
							<p>` + posts[i]["Comments"][j]["Text"] + `</p>
						</div>`;
			}

		post += `</section>
			</footer>
		</section>
        `;
        result += post;
    }
    return result;
}

axios.get('api-post.php').then(response => {
	for (let i = 0; i < response.data.length; i++) {
		if (response.data[i]["Training"] != "") {
			response.data[i]["Training"] = response.data[i]["Training"].replaceAll(",", "  ");
			response.data[i]["Training"] = "Allenamento:\n" + response.data[i]["Training"];
		}
	}
    console.log(response.data);
	let posts = generatePosts(response.data);
	const main = document.getElementById("post-container");
    main.innerHTML = posts;
	attachEventListener(response.data.length, response.data);
});

function attachEventListener(posts, allPosts){
	for (i = 0; i < posts; i++) {
		let commentForm=document.getElementById("form" + i);
		let txt = document.getElementById("txt-c" + i);
		commentForm.txt = txt;
		commentForm.post = allPosts[i];
		commentForm.formId = i;
		commentForm.addEventListener("submit", function (event) {
			event.preventDefault();
			uploadComment(event.currentTarget.post, event.currentTarget.txt.value);
			updateComment();
		});
	}
}

function uploadComment(post, text){
	const formData = new FormData();
    formData.append('post', post["Id"]);
	formData.append('user', post["User"]);
    formData.append('text', text);
    axios.post('api-comment.php', formData).then(response2 => {
		console.log(response2);
    });
}

function updateComment(){
	axios.get('api-post.php').then(response => {
		console.log(response);
		let posts = generatePosts(response.data);
		const main = document.getElementById("post-container");
		main.innerHTML = posts;
		attachEventListener(response.data.length, response.data);
	});
}