<!DOCTYPE html>
<html lang="it">
    <head>
        <title><?php echo $templateParams["titolo"]; ?></title>
        <link rel="stylesheet" type="text/css" href="../css/light-background.css"/>
        <meta charset="UTF-8"/>
    </head>
    <body>
		<?php
		if(isset($templateParams["js"])):
			foreach($templateParams["js"] as $script):
		?>
			<script src="<?php echo $script; ?>"></script>
		<?php
			endforeach;
		endif;
		?>
    </body>
</html>