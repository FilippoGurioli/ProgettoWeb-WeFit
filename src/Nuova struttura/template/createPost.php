<header>
    <h1>Crea un nuovo post</h1>
</header>
<form action="#" method="POST" name="post-form">
    <fieldset id="comment-fields">
        <label>
            <b>Inserisci un commento:</b>
            <textarea type="text" name="comment"></textarea>
        </label>
    </fieldset>
    <fieldset id="images-fields">
        <label>
            <b>Inserisci delle immagini:</b>
            <input type="file" name="image-selector"/>
        </label>
        <div id="img-section">
            <img src="#" alt="aa">
            <img src="#" alt="ss">
            <img src="#" alt="dd">
        </div>
    </fieldset>
    <fieldset id="training-plan-fields">
        <label>
            <b>Inserisci un allenamento:</b>
            <p id="plan"></p>
            <fieldset>
                <label>
                    Esercizio:
                    <input type="text" name="txtExcercise" placeholder="Inserisci il nome dell'esercizio"/>
                </label>
                <input type="button" name="btnStatico" value="Statico"/>
                <input type="button" name="btnDinamico" value="Dinamico"/>
                <label>
                    N° ripetizioni:
                    <input type="number" name="nbrReps"/>
                </label>
                <label>
                    N° serie:
                    <input type="number" name="nbrSerie"/>
                </label>
                <label>
                    Tempo riposo:
                    <input type="number" step="0.01" name="nbrRestingTime"/>
                    <span>min</span>
                </label>
                <label>
                    Durata:
                    <input type="number" step="0.01" name="nbrTime"/>
                    <span>min</span>
                </label>
                <div>
                    <input type="button" name="btnAggiungi" value="Aggiungi">
                </div>
            </fieldset>
        </label>
    </fieldset>
    <fieldset id="weight-fields">
        <label>
            <b>Inserisci il tuo peso attuale:</b>
            <input type="number" name="nbrPeso"/>
            <span>kg</span>
        </label>
    </fieldset>
    <section>
        <input type="submit" name="btnPublish" value="Pubblica!">
    </section> 
    <a href="#">Cancella</a>
</form>