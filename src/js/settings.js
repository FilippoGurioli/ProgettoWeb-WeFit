let openUser = false;
let openBirth = false;
let openEmail = false;
let openWeight = false;
let openHeight = false;
let openPassword = false;

function open() {
  console.log(!openUser);
  if (!openUser) {
    document.getElementById("user").style.display = "block";
    openUser = true;
  } else{
    document.getElementById("user").style.display = "none";
    openUser = false;
  }
}

function back() {
  window.location.pathname = './ProgettoWeb-WeFit/src/profile-redirector.php';
}



/*
document.querySelector("main .personal-info input[name='mUsername']").addEventListener("click", function (event) {
	event.preventDefault();
	const username = document.querySelector("input[name=username]").value;
	login(username, password);
});*/
/*
function modifyUsername(username) {
    const formData = new FormData();
    formData.append('username', username);
    axios.get('api-settings.php', formData).then(response => {
		if(response.data["successoModifica"]) {
			console.log("Gang");
		}
    });
}*/