<?php
include 'functions.php';
$language = get_param('lang', 'en');
$pageId = get_param('id',0);
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?><body>
<div><a href="menu.php"><img id="title-logo" src="img/coffeeshopTemp.png" class="center"/></a></div>
<?php include "nav.php" ?>
<main>
<?php render_content($pageId, $language);?>
</main>
<?php include 'footer.php' ?></body>
</html>
