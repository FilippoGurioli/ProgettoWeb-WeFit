<section>
    <header>
        <?php if (isset($_SESSION["page"]) && $_SESSION["page"] == "notifications"):?>
            <h1 id="title">Notifiche</h1>
        <?php elseif (isset($_SESSION["page"]) && $_SESSION["page"] == "followers"):?>
            <h1>Followers</h1>
        <?php elseif (isset($_SESSION["page"]) && $_SESSION["page"] == "followed"):?>
            <h1>Seguiti</h1>
        <?php endif; ?>
    </header>
    <div id="container"></div>
</section>