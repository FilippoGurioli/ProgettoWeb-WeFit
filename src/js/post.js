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
				post += `<img class="photo" alt="" src="./upload/` + posts[i]["Images"][j]["Image"] + `"/>`;
			}
			
			post +=	`</div>
				<div class="weight">Il peso di oggi è: ${posts[i]["Weight"]}</div>
			</section>
			<footer>
				<form action="POST" action="#" class="comments-form">
					<input class="txt-comment" type="text" placeholder="Lascia un commento..."></input>
					<input class="btn-comment" type="submit" value="OK"></input>
				</form>
					<section class="comment-section">`
			
				for(let j = 0; j < posts[i]["Comments"].length; j++){
					post += `<div class="comment">
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

const formData = new FormData();
let status = "home";
formData.append('person', status);
axios.post('api-post.php', formData).then(response => {
    console.log(response);
	let posts = generatePosts(response.data);
	const main = document.getElementById("post-container");
    main.innerHTML = posts;
});

function comment(comm) {
    document.getElementsByClassName("main form").addEventListener("submit", function (event) {
		event.preventDefault();
		alert("ciaoo");
	});
}