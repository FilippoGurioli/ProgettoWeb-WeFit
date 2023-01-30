const imgPreview = document.getElementById("img-section");
const plan = document.getElementById("plan");

const images = new Array();
const exercises = new Array();

document.getElementById("image-selector").addEventListener("change", handler, false);

document.getElementById("btn-img-selector").addEventListener("click", function (event) {
    event.preventDefault();
    imgPreview.innerHTML = "";
    document.getElementById("image-selector").click();
});

function handler(event) {
    event.preventDefault();
    getImgData();
}

function getImgData() {
    //needed if the user want to reset the images
    for (i = 0; i < images.length; i++) {
        images.pop();
    }
    const files = document.getElementById("image-selector").files;
    for (i = 0; i < files.length && i < 6; i++) {
        if (files[i]) {
            const fileReader = new FileReader();
            fileReader.addEventListener("load", function () {
                imgPreview.innerHTML += '<img src="' + this.result + '" />';
                images.push(this.result);
            });
            fileReader.readAsDataURL(files[i]);
        }
    }
}

let first = true;

document.getElementById("btnStatico").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("dynamic-inputs").style.display = "none";
    document.getElementById("static-inputs").style.display = "inline";
    document.getElementById("btnStatico").style.backgroundColor = "rgba(250, 152, 29, 1)";
    document.getElementById("btnDinamico").style.backgroundColor = "rgba(250, 152, 29, 0.5)";
    if (first) {
        first = false;
        document.getElementById("btnAggiungi").style.display = "inline";
    }
});

document.getElementById("btnDinamico").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("static-inputs").style.display = "none";
    document.getElementById("dynamic-inputs").style.display = "inline";
    document.getElementById("btnStatico").style.backgroundColor = "rgba(250, 152, 29, 0.5)";
    document.getElementById("btnDinamico").style.backgroundColor = "rgba(250, 152, 29, 1)";
    if (first) {
        first = false;
        document.getElementById("btnAggiungi").style.display = "inline";
    }
});

document.getElementById("training-plan-fields").addEventListener("submit", function (event) {
    const ex = new Array();
    event.preventDefault();
    const name = document.getElementById("txtExcercise").value;
    if (document.getElementById("static-inputs").style.display == "none") {
        const duration = "Durata:" + document.getElementById("nbrTime").value + "min";
        plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>"+ duration +'</label></div>';
        ex.push(new Array(name, duration));
    } else {
        const reps = "Reps:" + document.getElementById("nbrReps").value;
        const series = "Series:" + document.getElementById("nbrSerie").value;
        const rest = "Rest:" + document.getElementById("nbrRestingTime").value + "min";
        plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>"+reps+"</label><label>"+series+"</label><label>"+rest+'</label></div>';
        ex.push(new Array(name, reps, series, rest));
    }
    document.getElementById("txtExcercise").value = "";
    exercises.push(ex);
});

document.getElementById("publishBtnContainer").addEventListener("submit", function (event) {
    event.preventDefault();
    let comment = "";
    let weight = "";
    if (document.getElementById("comment").value != "") {
        comment = document.getElementById("comment").value;
    }
    if (document.getElementById("nbrPeso").value != "") {
        weight = document.getElementById("nbrPeso").value;
    }
    if (comment == "" && exercises.length == 0 && images.length == 0) {
        alert("Devi compilare almeno uno dei 3 campi");
    } else {
        createPost(comment, weight);
    }
});

function createPost(comment, weight) {
    const formData = new FormData();
    if (images.length == 0) {
        images.push("");
    }
    if (exercises.length == 0) {
        exercises.push(new Array(""));
    }
    formData.append('comment', comment);
    images.forEach(e => {
        formData.append('images[]', e);
    });
    exercises.forEach(e => {
        formData.append('exercises[][]', e);
    });
    formData.append('weight', weight);
    axios.post('api-create-post.php', formData).then(response => {
        console.log(response);
        if (!response.data["error"]) {
            window.location.pathname = './ProgettoWeb-WeFit/src/profile-redirector.php';
        }
    });
}