<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Login</title>
        <!--<base href="?" target="?"/>-->
        <link rel="stylesheet" type="text/css" href="../css/light-background.css"/>
        <link rel="stylesheet" type="text/css" href="../css/RegisterLoginSS.css"/>
        <link rel="stylesheet" type="text/css" href="../css/LoginStyleSheet.css"/>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <header>
                    <img src="../resources/WeFitLogo.png" alt="WeFit logo"/>
                </header>
                <div>
                    <form method="POST" name="Accesso">
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
                    <a href="Register.html"><button>Registrati</button></a>
                </div>
            </div>
            <footer>By Filippo Gurioli & Silvia Furegato</footer>
        </div>
    </body>
</html>