document.querySelector("main form").addEventListener("submit", function (event) {
	event.preventDefault();
	const username = document.querySelector("input[name=username]").value;
	const password = document.querySelector("input[name=password]").value;
    const birthday = document.querySelector("input[name=dataDiNascita]").value;
    const email = document.querySelector("input[name=email]").value;
    const height = document.querySelector("input[name=altezza]").value;
    const weight = document.querySelector("input[name=peso]").value;
	register(username, password, birthday, email, height, weight);

});

function register(username, password, birthday, email, height, weight) {
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    formData.append('birthday', birthday);
    formData.append('email', email);
    formData.append('height', height);
    formData.append('weight', weight);
    axios.post('api-register.php', formData).then(response => {
        if (response.data["error"]) {
            document.getElementById("error").style.display = "block";
        } else {
            window.location.pathname = './ProgettoWeb-WeFit/src/index.php';
        }
    });
}
