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
        const duration = document.getElementById("nbrTime").value;
        plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>"+ duration +'min</label></div>';
        ex.push(new Array(name, duration));
    } else {
        const reps = document.getElementById("nbrReps").value;
        const series = document.getElementById("nbrSerie").value;
        const rest = document.getElementById("nbrRestingTime").value;
        plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>Reps:"+reps+"</label><label>Series:"+series+"</label><label>Rest:"+rest+'min</label></div>';
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
    if (post.length == 0) {
        alert("Devi compilare almeno uno dei 3 campi");
    }
    if (document.getElementById("nbrPeso").value != "") {
        weight = document.getElementById("nbrPeso").value;
    }
    createPost(comment, weight);
});

function createPost(comment, weight) {
    const formData = new FormData();
    formData.append('comment', comment);
    images.forEach(e => {
        formData.append('images[]', e);
    });
    exercises.forEach(e => {
        formData.append('exercises[]', e);
    });
    formData.append('weight', weight);
    axios.post('api-create-post.php', formData).then(response => {
        //window.location.pathname = './ProgettoWeb-WeFit/src/profile-redirector.php';
    });
}