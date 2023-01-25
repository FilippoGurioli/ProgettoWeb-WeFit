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
    openSearch();
    alert("ricerca php");
  }

  function openPhoto(image) {
    alert("ricerca php");
  }