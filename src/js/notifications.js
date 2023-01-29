axios.get('api-notifications.php').then(response => {
    let notificationsHTML = generateNotifications(response.data);
    const main = document.getElementById("container");
    main.innerHTML = notificationsHTML;
});

function generateNotifications(data) {
    let result = "";
    for (let i = 0; i < data.length; i++) {
        result += `
        <section class="notification">
            <img src="`;
        result += "./upload/"+data[i]["Photo"];
            
        result += `" class="photo" alt="foto profilo"/>
            <p class="name">`;
            
        result += data[i]["Author"];
        result +=`
            </p>
            <p class="type">`;
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
    return result;
}