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
    const searched = document.getElementById("searchedTxt").value;
    search(searched);
    openSearch();
  }

  function search(searched) {
    const formData = new FormData();
    formData.append('searched', searched);
    axios.post('api-search.php', formData).then(response => {
		if(response.data["successoRicerca"]) {
			window.location.pathname = './ProgettoWeb-WeFit/src/friend-profile-redirector.php';
		} else {
      alert("Non esiste nessuno con quel nickname");
    }
    });
}

  function openPhoto(image) {
    alert("ricerca php");
  }