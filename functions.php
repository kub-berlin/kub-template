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

function kub_opengraph($document) {
    $app = JFactory::getApplication();
    $article_title = JTable::getInstance('content');
    $article_title->load(JRequest::getInt('id'));

    $title = $article_title->get('title');
    $siteName = $app->getCfg('sitename');

    $desc = $article_title->get('metadesc');
    if (empty($desc)) {
        $desc = $document->getMetaData('description');
    }

    $document->addCustomTag('<meta property="og:title" content="'.$title.'"/>');
    $document->addCustomTag('<meta property="og:site_name" content="'.$siteName.'"/>');
    $document->addCustomTag('<meta property="og:description" content="'.$desc.'"/>');

    preg_match('/src=[\\"\']([-0-9A-Za-z\/_]*.(jpg|png|gif|jpeg))/i', $article_title->fulltext, $images);
    if (array_key_exists(1, $images)) {
        if (substr($images[1], 0, 4) != 'http') {
            $images[1] = JURI::base().$images[1];
        }
        $document->addCustomTag('<meta property="og:image" content="'.$images[1].'"/>');
    }
}
?>
