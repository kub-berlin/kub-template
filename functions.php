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

function kub_module($name, $tag = 'div') {
    ob_start();
    jdocIncludeModules($name);
    $modules = ob_get_clean();
    if ($modules) {
        echo "<$tag id=\"$name\">";
        echo $modules;
        echo "</$tag>";
    }
}
?>
