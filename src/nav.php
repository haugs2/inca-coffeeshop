<link rel="stylesheet" type="text/css" href="css/main.css">

<?php

$pages = array(
        'Coffee' => 'coffee.php',
        'Machines' => 'machines.php',
        'Cups & Containers' => 'cups.php',
        'About' => 'about.php',
        'Contact' => 'contact.php'



);
$pagesRight = array(
    'Shopping Cart' => 'cart.php',
    'My Account' => array('Profile' => 'profile.php', 'Login' => 'login.php'),
    'Register' => 'register.php',
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
