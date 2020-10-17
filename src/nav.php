<link rel="stylesheet" type="text/css" href="css/main.css">

<?php


$pages = array(
        'Coffee' => add_param('menu.php', 'id', 1),
        'Machines' => add_param('menu.php', 'id',2),
        'Accessories' => add_param('menu.php', 'id', 3),
        'About' => add_param('menu.php', 'id', 4),
        'Contact' => add_param('menu.php', 'id', 5),


);
$pagesRight = array(
    'Cart' => add_param('menu.php', 'id', 6),
    'My Account' => array('Profile' => add_param('menu.php', 'id', 7), 'Login' => add_param('menu.php', 'id', 8)),
    'Register' => add_param('menu.php', 'id', 10),
);

$currentPage = basename($_SERVER['REQUEST_URI']);


?>

<div class="navbar" id="top-navigation">
    <?php foreach ($pagesRight as $pageTitle => $fileNameOrSubTree) {
        if (gettype($fileNameOrSubTree) == 'array') {
            //Subtree
            ?>
            <div class="dropdown">
                <?php
                $currentPageIsInSubTree= false;
                foreach($fileNameOrSubTree as $subElement){
                    if(get_query_param_from_url($currentPage, 'id')== get_query_param_from_url($subElement, 'id')){
                        $currentPageIsInSubTree=true;
                        break;
                    }
                };
                if($currentPageIsInSubTree) { ?>
                    <button class="dropbtn" style="background-color:lightblue"><?php echo translate_navigation(strtolower($pageTitle), $language) ?></button>
                <?php } else { ?>

                    <button class="dropbtn"><?php echo  translate_navigation(strtolower($pageTitle), $language) ?></button>
                <?php } ?>

                <div class="dropdown-content">
                    <?php foreach ($fileNameOrSubTree as $subPageTitle => $subFileName) { ?>
                        <a href="<?php echo $subFileName ?>"><?php echo translate_navigation(strtolower($subPageTitle), $language) ?></a>
                    <?php } //foreach ?></div>
            </div>
            <?php //if
        } else {

            //fileName
            if (get_query_param_from_url($fileNameOrSubTree, 'id') == get_query_param_from_url($currentPage, 'id')) {
                ?>
                <a style="background-color:lightblue"><?php echo translate_navigation(strtolower($pageTitle), $language); ?></a>
            <?php } else { ?>
                <a href="<?php echo $fileNameOrSubTree; ?>"><?php echo translate_navigation(strtolower($pageTitle), $language)  ?></a>
                <?php
            }
        }
    } ?>
</div>

<div class="navbar" id="main-navigation">
    <?php foreach ($pages as $pageTitle => $filename) {
        if (get_query_param_from_url($filename, 'id') == get_query_param_from_url($currentPage, 'id')) {
            ?>
            <a style="background-color:lightblue"><?php echo translate_navigation(strtolower($pageTitle), $language); ?></a>
        <?php } else { ?>
            <a href="<?php echo add_param($filename, 'lang', $language); ?>"><?php echo translate_navigation(strtolower($pageTitle), $language); ?></a>
            <?php
        }
    } ?>
</div>
