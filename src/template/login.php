<div id="page-container">
    <div id="content-wrap">
        <header>
            <img src="<?php echo UPLOAD_DIR.'WeFitLogo.png'; ?>" alt="WeFit logo"/>
        </header>
        <div>
            <form action="#" method="POST" name="Accesso">
                <fieldset>
                    <label>Username<br/>
                        <input type="text" name="username" required autofocus/><br/>
                    </label>
                    <label>Password<br/>
                        <input type="password" name="password" required/><br/>
                    </label>
                </fieldset>
                <input type="submit" value="Accedi"/>
            </form>
            <label>Non sei registrato?</label>
            <a href="register-redirector.php"><button>Registrati</button></a>
        </div>
    </div>
</div>