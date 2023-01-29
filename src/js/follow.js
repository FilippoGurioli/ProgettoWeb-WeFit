function follow(){
	let formData = new FormData();
	formData.append('action', "follow");
    axios.post('api-follow.php', formData).then(response => {
		if(response.data["succesfulOperation"] == true){
			console.log("OK");
		}
    });
	
	document.getElementById("btnFollow").setAttribute("onClick", "unfollow();");
	document.getElementById("btnFollow").innerHTML = "✔";
}

function unfollow(){
	const formData = new FormData();
	formData.append('action', "unfollow");
    axios.post('api-follow.php', formData).then(response => {
		if(response.data["succesfulOperation"] == true){
			console.log("OK");
		}
    });
	
	document.getElementById("btnFollow").setAttribute("onClick", "follow();");
	document.getElementById("btnFollow").innerHTML = "➕";
}