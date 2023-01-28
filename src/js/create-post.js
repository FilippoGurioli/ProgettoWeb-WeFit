const imgPreview = document.getElementById("img-section");
const plan = document.getElementById("plan");
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
    const files = document.getElementById("image-selector").files;
    for (i = 0; i < files.length && i < 6; i++) {
        if (files[i]) {
            const fileReader = new FileReader();
            fileReader.addEventListener("load", function () {
                imgPreview.innerHTML += '<img src="' + this.result + '" />';
            });
            fileReader.readAsDataURL(files[i]);
        }
    }
}

document.getElementById("btnStatico").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("dynamic-inputs").style.display = "none";
    document.getElementById("static-inputs").style.display = "inline";
    document.getElementById("btnStatico").style.backgroundColor = "rgba(250, 152, 29, 1)";
    document.getElementById("btnDinamico").style.backgroundColor = "rgba(250, 152, 29, 0.5)";
    document.getElementById("btnAggiungi").style.display = "inline";
});

document.getElementById("btnDinamico").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("static-inputs").style.display = "none";
    document.getElementById("dynamic-inputs").style.display = "inline";
    document.getElementById("btnStatico").style.backgroundColor = "rgba(250, 152, 29, 0.5)";
    document.getElementById("btnDinamico").style.backgroundColor = "rgba(250, 152, 29, 1)";
    document.getElementById("btnAggiungi").style.display = "inline";
});

document.getElementById("btnAggiungi").addEventListener("click", function (event) {
    event.preventDefault();
    const name = document.getElementById("txtExcercise").value;
    if (name != "") {
        if (document.getElementById("static-inputs").style.display == "none") {
            document.getElementById("dynamic-inputs").style.display = "none";
            document.getElementById("btnStatico").style.backgroundColor = "rgba(250, 152, 29, 1)";
            const duration = document.getElementById("nbrTime").value;
            plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>"+ duration +'min</label></div>';
        } else {
            document.getElementById("static-inputs").style.display = "none";
            document.getElementById("btnDinamico").style.backgroundColor = "rgba(250, 152, 29, 1)";
            const reps = document.getElementById("nbrReps").value;
            const series = document.getElementById("nbrSerie").value;
            const rest = document.getElementById("nbrRestingTime").value;
            plan.innerHTML += '<div class="ex"><label>' + name +"</label><label>Reps:"+reps+"</label><label>Series:"+series+"</label><label>Rest:"+rest+'min</label></div>';
            document.getElementById("txtExcercise").value = "";
            document.getElementById("btnAggiungi").style.display = "none";
        }
    } else {
        alert("Non puoi mettere un esercizio senza nome");
    }
});