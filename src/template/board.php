<section>
    <header>
        <?php if (isset($_SESSION["page"]) && $_SESSION["page"] == "notifications"):?>
            <h1 id="title">Notifiche</h1>
        <?php elseif (isset($_SESSION["page"]) && ($_SESSION["page"] == "personalfollowers" || $_SESSION["page"] == "friendfollowers")):?>
            <h1 id="title">Followers</h1>
        <?php elseif (isset($_SESSION["page"]) && $_SESSION["page"] == "followed"):?>
            <h1 id="title">Seguiti</h1>
        <?php endif; ?>
    </header>
    <div id="container"></div>
</section>