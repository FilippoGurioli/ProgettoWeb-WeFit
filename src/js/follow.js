function follow(){
	const formData = new FormData();
    axios.post('api-follow.php').then(response => {
		if(response.data["succesfulFollow"] == true){
			console.log("OK");
		}
    });
	
	document.getElementById("btnFollow").setAttribute("onClick", "unfollow();");
	document.getElementById("btnFollow").innerHTML = "✔";
}

function unfollow(){
	/*const formData = new FormData();
    axios.post('api-follow.php').then(response => {
		if(response.data["succesfulFollow"] == true){
			console.log("OK");
		}
    });*/
	alert("gay");
	
	document.getElementById("btnFollow").setAttribute("onClick", "follow();");
	document.getElementById("btnFollow").innerHTML = "➕";
}