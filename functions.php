<?php
defined('_JEXEC') or die;

function e($string) {
    echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function jdocIncludeModules($position) {
    $modules = JModuleHelper::getModules($position);
    foreach ($modules as $module) {
        echo JModuleHelper::renderModule($module);
    }
}

function kub_module($page, $name, $tag = 'div') {
    if ($page->countModules($name)) {
        echo "<$tag id=\"$name\">";
        jdocIncludeModules($name);
        echo "</$tag>";
    }
}
?>
