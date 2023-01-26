tryToRegister();

function tryToRegister() {
    document.querySelector("main form").addEventListener("submit", function (event) {
        //event.preventDefault();
        const username = document.querySelector("#username").value;
        const birth = document.querySelector("#dataDiNascita").value;
		const email = document.querySelector("#email").value;
		const height = document.querySelector("#altezza").value;
		const weight = document.querySelector("#peso").value;
		const password = document.querySelector("#password").value;
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
    axios.post('api-register.php', formData).then(response => {
        console.log(response);
    });
}
