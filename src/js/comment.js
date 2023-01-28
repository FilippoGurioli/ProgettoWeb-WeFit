let commentForms=document.getElementsByClassName(".comments-form");

for (i = 0; i < commentForms.length; i++) {
    commentForms[i].addEventListener("submit", function (event) {
        event.preventDefault();
        console.log("dio madonna");
    })};
