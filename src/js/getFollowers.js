function generateRows(rows){
    let result = "";
	if (rows != undefined) {
		for(let i=0; i < rows.length; i++){
			let row = `<div class="row">
							<img src="./upload/` + rows[i]["Photo"] + `" alt="Foto di un follower"/>
							<p>` + rows[i]["User2"] + `</p>
						</div>`;
			result += row;
		}
	}
    return result;
}

axios.get('api-getFollowers.php').then(response => {
    console.log(response.data);
	let rows = generateRows(response.data["allFollowers"]);
	const main = document.getElementById("container");
    main.innerHTML = rows;
});
