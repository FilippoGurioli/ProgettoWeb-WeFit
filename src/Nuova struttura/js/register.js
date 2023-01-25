axios.get('api-register.php').then(response => {
    visualizzaLoginForm();
});

function visualizzaLoginForm() {
    // Gestisco tentativo di login
    document.querySelector("main form").addEventListener("submit", function (event) {
        event.preventDefault();
        const username = document.querySelector("#username").value;
        const password = document.querySelector("#password").value;
        register(username, password);
    });
}

function register(username, password) {
    /* 
     * Non funzionante in quanto i parametri sono convertiti in formato json e non sono letti 
     * da PHP che non li inserisce nell'array $_POST:
     * 
     * const formData = { 
     *     data: {
     *         username: document.querySelector("#username").value,
     *         password: document.querySelector("#password").value
     *     }
     * }
     */
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    axios.post('api-login.php', formData).then(response => {
        console.log(response);
        if (response.data["logineseguito"]) {
            visualizzaArticoli(response.data["articoliautore"]);
        } else {
            document.querySelector("form > p").innerText = response.data["errorelogin"];
        }
    });