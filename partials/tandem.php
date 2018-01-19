<?php
$lang = substr(JFactory::getLanguage()->getTag(), 0, 2);

if (isset($_GET["tid"])) {
    $id= $_GET["tid"];
} else {
    $id= "";
}

if (isset($_GET["a"])) {
    $a = $_GET["a"];
} else {
    $a = "";
}

if (isset($_GET["action"])) {
    $action= $_GET["action"];
} else {
    $action= "table";
}

$url = "https://kub-berlin.org/sprach-tandem/index.php?lang=$lang&action=$action&tid=$id&a=$a";
?>
<iframe
    src="<?php e($url) ?>"
    scrolling="auto"
    class="wrapper"
    width="100%"
    height="1600"
    frameborder="0"
    seamless="seamless">
</iframe>
