<div id="page-container">
    <div id="content-wrap">
        <header>
            <img src="../resources/WeFitLogo.png" alt="WeFit logo"/>
        </header>
        <div>
            <form action="#" method="POST" name="Accesso">
                <?php if(isset($templateParams["errorelogin"])): ?>
                    <p><?php echo $templateParams["errorelogin"]; ?></p>
                <?php endif; ?>
                <fieldset>
                    <label>Username<br/>
                        <input type="text" name="Username" required autofocus/><br/>
                    </label>
                    <label>Password<br/>
                        <input type="password" name="Password" required/><br/>
                    </label>
                </fieldset>
                <input type="submit" value="Accedi"/>
            </form>
            <label>Non sei registrato?</label>
            <a href="Register.php"><button>Registrati</button></a>
        </div>
    </div>
    <footer>By Filippo Gurioli & Silvia Furegato</footer>
</div>