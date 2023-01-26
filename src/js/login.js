document.querySelector("main form").addEventListener("submit", function (event) {
	event.preventDefault();
	const username = document.querySelector("input[name=username]").value;
	const password = document.querySelector("input[name=password]").value;
	login(username, password);
});

function login(username, password) {
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    axios.post('api-login.php', formData).then(response => {
		if(response.data["logineseguito"]) {
			window.location.pathname = './ProgettoWeb-WeFit/src/profile.php';
		}
    });
}