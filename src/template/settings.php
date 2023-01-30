<header>
	<h1>Impostazioni</h1>
</header>
<section>
	<form class="personal-info">
		<h3>Informazioni Personali:</h3>
		<input type="button" name="mUsername" onClick="openTxt()" value="Modifica username"></input>
		<input id="user" type="text" name="txtUsername" placeholder="Inserisci nuovo username"></input>
		<input type="button" name="mBirthday" value="Modifica data di nascita"></input>
		<input id="birth" type="date" name="dtBirthday"></input>
		<input type="button" name="mEmail" onClick="openEmailTxt()" value="Modifica email"></input>
		<input id="email" type="email" name="txtEmail" placeholder="Inserisci nuova email"></input>
		<input type="button" name="mWeight" value="Modifica peso"></input>
		<input id="weight" type="number" name="nmbWeight"></input>
		<input type="button" name="mHeight" value="Modifica altezza"></input>
		<input id="height" type="number" name="nmbHeight"></input>
		<input type="button" name="mPassword" value="Cambia password"></input>
		<input id="password" type="password" name="txtPassword"></input>
	</form>
	<form class="update-objective">
		<input type="button" onclick="" value="Aggiorna obbiettivo"></input>
	</form>
	<form class="exit">
		<input type="button" onclick="" value="Elimina profilo"></input>
		<input type="button" onclick="" value="Esci dal profilo"></input>
	</form>
</section>
<footer>
	<form class="back">
		<input type="button" onclick="" value="Torna a WeFit!"></input>
	</form>
</footer>