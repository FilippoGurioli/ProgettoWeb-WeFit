<header>
    <img src="<?php UPLOAD_DIR.'WeFitLogo.png' ?>" alt="Wefit logo"/>
</header>
<div id="form">
    <form action="#" method="POST" name="Accesso">
        <fieldset>
            <label>Username<br/>
                <input type="text" name="username" required autofocus/><br/>
            </label>
            <label>Data di nascita<br/>
                <input type="date" name="dataDiNascita" required/><br/>
            </label>
            <label>Email<br/>
                <input type="email" name="email" required/><br/>
            </label>
                <div id="altezza">
                    <label>Altezza<br/>
                        <input type="number" min="0" max="250" name="altezza" required/>cm<br/>
                    </label>
                </div>
                <div id="peso">
                    <label>Peso<br/>
                        <input type="number" step="0.1" min="0" max="350" name="peso" required/>kg<br/>
                    </label>
                </div>
            <label>Password<br/>
                <input type="password" name="password" required/><br/>
            </label>
        </fieldset>
        <input type="submit" name="btnRegister" value="Registrati"/>
    </form>
    <label>Hai già un account? Torna al <a href="login.php">login</a></label>
</div>