<link rel="stylesheet" type="text/css" href="css/main.css">

<?php

$pages = array(
        'Coffee' => add_param('menu.php', 'id', 1),
        'Machines' => add_param('menu.php', 'id',2),
        'Cups & Containers' => add_param('menu.php', 'id', 3),
        'About' => add_param('menu.php', 'id', 4),
        'Contact' => add_param('menu.php', 'id', 5)

);
$pagesRight = array(
    'Shopping Cart' => add_param('menu.php', 'id', 6),
    'My Account' => array('Profile' => add_param('menu.php', 'id', 7), 'Login' => add_param('menu.php', 'id', 8)),
    'Register' => add_param('menu.php', 'id', 8),
);

$currentPage = basename($_SERVER['REQUEST_URI']);

?>

<div class="navbar" id="top-navigation">
    <?php foreach ($pagesRight as $pageTitle => $fileNameOrSubTree) {
        if (gettype($fileNameOrSubTree) == 'array') {
            //Subtree
            ?>
            <div class="dropdown">
                <?php if (in_array($currentPage, $fileNameOrSubTree)) { ?>
                    <button class="dropbtn" style="background-color:lightblue"><?php echo $pageTitle ?></button>
                <?php } else { ?>

                    <button class="dropbtn"><?php echo $pageTitle ?></button>
                <?php } ?>

                <div class="dropdown-content">
                    <?php foreach ($fileNameOrSubTree as $subPageTitle => $subFileName) { ?>
                        <a href="<?php echo $subFileName ?>"><?php echo $subPageTitle ?></a>
                    <?php } //foreach ?></div>
            </div>
            <?php //if
        } else {

            //fileName
            if ($fileNameOrSubTree == $currentPage) {
                ?>
                <a style="background-color:lightblue"><?php echo $pageTitle; ?></a>
            <?php } else { ?>
                <a href="<?php echo $fileNameOrSubTree; ?>"><?php echo $pageTitle ?></a>
                <?php
            }
        }
    } ?>
</div>

<div class="navbar" id="main-navigation">
    <?php foreach ($pages as $pageTitle => $filename) {
        if ($filename == $currentPage) {
            ?>
            <a style="background-color:lightblue"><?php echo $pageTitle; ?></a>
        <?php } else { ?>
            <a href="<?php echo $filename; ?>"><?php echo $pageTitle ?></a>
            <?php
        }
    } ?>
</div>
