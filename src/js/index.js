function generatePosts(posts){
    let result = "";
    for(let i=0; i < posts.length; i++){
        let articolo = `
        <article>
            <header>
                <div>
                    <img src="${posts[i]["imgarticolo"]}" alt="" />
                </div>
                <h2>${posts[i]["titoloarticolo"]}</h2>
                <p>${articoli[i]["nome"]} - ${articoli[i]["dataarticolo"]}</p>
            </header>
            <section>
                <p>${articoli[i]["anteprimaarticolo"]}</p>
            </section>
            <footer>
                <a href="articolo.php?id=${articoli[i]["idarticolo"]}">Leggi tutto</a>
            </footer>
        </article>
        `;
        result += articolo;
    }
    return result;
}

axios.get('api-post.php').then(response => {
    console.log(response);
	console.log("non vaaaa");
    /*let posts = generatePosts(response.data);
    const main = document.querySelector("main");
    main.innerHTML = posts;*/
});