axios.get('api-notifications.php').then(response => {
    let notifications = generateNotifications(response.data);
    const main = document.getElementById("container");
    main.innerHTML = notifications;
});

function generateNotifications(notifications) {
    let result ="";
}