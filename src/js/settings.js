let openUser = false;
let openBirth = false;
let openEmail = false;
let openWeight = false;
let openHeight = false;
let openPassword = false;

function openTxt() {
  if (!openUser) {
    document.getElementById("user").style.display = "block";
    openUser = true;
  } else{
    modifyUsername(document.getElementById("user").value);
    document.getElementById("user").style.display = "none";
    openUser = false;
  }
}

function openEmailTxt() {
  if (!openEmail) {
    document.getElementById("email").style.display = "block";
    openUser = true;
  } else{
    modifyEmail(document.getElementById("email").value);
    document.getElementById("email").style.display = "none";
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

function modifyUsername(username) {
    const formData = new FormData();
    formData.append('username', username);
    axios.post('api-settings.php', formData).then(response => {
		  console.log(response);
    });
}

function modifyEmail(email) {
  const formData = new FormData();
  formData.append('email', email);
  axios.post('api-settings.php', formData).then(response => {
    console.log(response);
  });
}