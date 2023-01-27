<header>
    <h1>Crea un nuovo post</h1>
</header>
<form id="comment-fields" class="forms">
    <label>
        <b>Inserisci un commento:</b>
        <textarea type="text" name="comment"></textarea>
    </label>
</form>
<form id="images-fields" class="forms">
    <label>
        <b>Inserisci delle immagini:</b>
        <input type="file" name="image-selector"/>
    </label>
    <div id="img-section">
        <img src="#" alt="a"/>
    </div>
</form>
<form id="training-plan-fields" class="forms">
    <label>
        <b>Inserisci un allenamento:</b>
        <p id="plan"></p>
    </label>
    <div id="selection-zone">
        <label>
            Esercizio:
            <input type="text" name="txtExcercise" placeholder="Inserisci il nome dell'esercizio" required/>
        </label>
        <input type="button" name="btnStatico" value="Statico"/>
        <input type="button" name="btnDinamico" value="Dinamico"/>
        <label>
            N° ripetizioni:
            <input type="number" min="0" value="10" class="excercise" name="nbrReps" required/>
        </label>
        <label>
            N° serie:
            <input type="number" min="0" value="4" class="excercise" name="nbrSerie" required/>
        </label>
        <label>
            Tempo riposo:
            <input type="number" min="0" value="0.50" step="0.1" class="excercise" name="nbrRestingTime" required/>
            <span>min</span>
        </label>
        <label>
            Durata:
            <input type="number" min="0" value="15" class="excercise" name="nbrTime"/>
            <span>min</span>
        </label>
        <div id="submitContainer">
            <input type="submit" name="btnAggiungi" value="Aggiungi">
        </div>
    </div>
</form>
<form id="weight-fields" class="forms">
    <label>
        <b>Inserisci il tuo peso attuale:</b>
        <input type="number" min="0" value="62" max="350" name="nbrPeso"/>
        <span>kg</span>
    </label>
</form>
<section id="publishBtnContainer">
    <input type="submit" name="btnPublish" value="Pubblica!"/>
</section>
<a href="profile-redirector.php">Cancella</a>