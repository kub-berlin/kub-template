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

function kub_opengraph($doc) {
    $app = JFactory::getApplication();
    $article_title = JTable::getInstance('content');
    $article_title->load(JRequest::getInt('id'));

    $title = $article_title->get('title');
    $siteName = $app->getCfg('sitename');

    $desc = $article_title->get('metadesc');
    if (empty($desc)) {
        $desc = $doc->getMetaData('description');
    }

    $doc->addCustomTag('<meta property="og:title" content="'.$title.'"/>');
    $doc->addCustomTag('<meta property="og:site_name" content="'.$siteName.'"/>');
    if ($desc) $doc->addCustomTag('<meta property="og:description" content="'.$desc.'"/>');

    preg_match('/src=[\\"\']([-0-9A-Za-z\/_]*.(jpg|png|gif|jpeg))/i', $article_title->fulltext, $images);
    if (array_key_exists(1, $images)) {
        if (substr($images[1], 0, 4) != 'http') {
            $images[1] = JURI::base().$images[1];
        }
        $doc->addCustomTag('<meta property="og:image" content="'.$images[1].'"/>');
    }
}

function jfGetCurrentLanguage() {
    $jfManager = JoomFishManager::getInstance();
    $curLangSEF = JFactory::getLanguage()->getTag();

    foreach ($jfManager->getActiveLanguages(true) as $lang) {
        if ($lang->lang_code == $curLangSEF) {
            return $lang;
        }
    }
}

function jfGetOtherLanguages() {
    // inspired by modules/mod_jflanguageselection
    $jfManager = JoomFishManager::getInstance();
    $jfrouter = JFRoute::getInstance();
    $curLang = jfGetCurrentLanguage();

    $languages = array();

    foreach ($jfManager->getActiveLanguages(true) as $lang) {
        if ($lang->lang_code != $curLang->lang_code) {
            $code = $lang->getLanguageCode();
            $languages[$code] = $jfrouter->rerouteCurrentUrl($code);
        }
    }

    return $languages;
}

function jfGetHome() {
    return JURI::base().jfGetCurrentLanguage()->getLanguageCode();
}
?>
