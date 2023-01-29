function generateRows(rows){
    let result = "";
    for(let i=0; i < rows.length; i++){
        let row = `<div class="row">
                        <img src="./upload/` + rows[i]["Photo"] + `" alt="Foto di un follower"/>
                        <p>` + rows[i]["User2"] + `</p>
                    </div>`;
        result += row;
    }
    return result;
}

axios.get('api-getFollowers.php').then(response => {
    console.log(response.data["allFollowers"]);
	let rows = generateRows(response.data["allFollowers"]);
	const main = document.getElementById("container");
    main.innerHTML = rows;
	//attachEventListener(response.data.length, response.data);
});

function attachEventListener(posts, allPosts){
	for (i = 0; i < posts; i++) {
		let commentForm=document.getElementById("form" + i);
		let txt = document.getElementById("txt-c" + i);
		commentForm.txt = txt;
		commentForm.postId = allPosts[i]["Id"];
		commentForm.formId = i;
		commentForm.addEventListener("submit", function (event) {
			event.preventDefault();
			uploadComment(event.currentTarget.postId, event.currentTarget.txt.value);
			updateComment();
		});
	}
}