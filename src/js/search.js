let open = false;

function openSearch() {
    if (!open) {
        document.getElementById("search-bar").style.display = "grid";
        open = true;
    } else{
        document.getElementById("search-bar").style.display = "none";
        open = false;
    }
  }

  function startSearch() {
    const searched = document.querySelector("#search-bar").value;
    console.log(searched);
    alert("ricerca php");
    search(searched);
    openSearch();
  }

  function search(searched) {
    const formData = new FormData();
    formData.append('searched', searched);
    axios.post('api-search.php', formData).then(response => {
		if(response.data["successoRicerca"]) {
			window.location.pathname = './ProgettoWeb-WeFit/src/friend-profile-redirector.php';
		}
    });
}

  function openPhoto(image) {
    alert("ricerca php");
  }