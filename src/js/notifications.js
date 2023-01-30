axios.get('api-notifications.php').then(response => {
    if (!response.data["error"]) {
        console.log(response);
        let notificationsHTML = generateNotifications(response.data);
        const main = document.getElementById("container");
        main.innerHTML = notificationsHTML;
    }
});

function generateNotifications(data) {
    let result = "";

    if (data.length != 0) {
        for (let i = data.length-1; i >= 0; i--) {
            result += `
            <section class="row">
                <img src="`;
            result += "./upload/"+data[i]["Photo"];
                
            result += `" alt="foto profilo"/>
                <p style="font-weight: bold;">`;
                
            result += data[i]["Author"];
            result +=`
                </p>
                <p>`;
            if (data[i]["Type"] == "follow") {
                result += "ha iniziato a seguirti!";
            } else if (data[i]["Type"] == "comment") {
                result += "ha lasciato un commento sotto un tuo post";
            } else {
                result += "ha appena postato";
            }
            result +=`</p>
            </section>
            `;
        }
    }
    return result;
}