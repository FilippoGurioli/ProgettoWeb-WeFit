tryToRegister();

function tryToRegister() {
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault();
        const username = document.querySelector("input[name=username]").value;
        const birth = document.querySelector("input[name=dataDiNascita]").value;
		const email = document.querySelector("input[name=email]").value;
		const height = document.querySelector("input[name=altezza]").value;
		const weight = document.querySelector("input[name=peso]").value;
		const password = document.querySelector("input[name=password]").value;
        register(username, birth, email, height, weight, password);
    });
}

function register(username, birth, email, height, weight, password) {
    const formData = new FormData();
    formData.append('username', username);
    formData.append('birthday', birth);
	formData.append('email', email);
	formData.append('height', height);
	formData.append('weight', weight);
	formData.append('password', password);
    axios.post('api-login.php', formData).then(response => {
        console.log(response);
    });
}
