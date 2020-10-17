<?php
include 'functions.php';
$language = get_param('lang', 'en');
$pageId = get_param('id',0);
$product_id = get_param('productId',0);
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?><body>
<div><a href="menu.php?id=0&lang=<?php echo $language?>"><img id="title-logo" src="img/logo.png" class="center"/></a></div>
<?php navigation($pageId, $language)?>
<div><?php languages($language, $pageId, $product_id)?></div>
<main>
<?php render_content($pageId, $language);?>
</main>
<?php include 'footer.php' ?></body>
</html>
