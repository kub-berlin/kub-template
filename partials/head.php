<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$templatePath = JPATH_BASE . "/templates/{$doc->template}";
$dir = $doc->direction;

include_once "$templatePath/functions.php";

function setKubHead()
{
    $doc = JFactory::getDocument();

    $templateUrl = "{$doc->baseurl}/templates/{$doc->template}";
    $dir = $doc->direction;

    // clear unneccessary scripts
    $doc->_script = array();
    $doc->_scripts = array();
    $doc->_style = array();
    $doc->_styleSheets = array();

    $doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0');
    $doc->setMetaData('X-UA-Compatible', 'IE=edge,chrome=1', true);
    $doc->addStyleSheet("$templateUrl/css/kub-$dir.css");
    $doc->addScript("$templateUrl/js/nav.js");
    $doc->addScript("$templateUrl/js/table.js");
    $doc->addScript("$templateUrl/js/newsletter.js");
    $doc->addScript("$templateUrl/js/accordion.js");

    kub_opengraph($doc);
}

$app->registerEvent('onBeforeCompileHead', 'setKubHead');

?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php e($doc->language); ?>"
    lang="<?php e($doc->language); ?>"
    dir="<?php e($dir); ?>"
    prefix="s: http://schema.org/ og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline'; img-src *; frame-src 'self' https://www.youtube-nocookie.com/">
    <jdoc:include type="head" />
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<?php foreach (jfGetOtherLanguages() as $code => $href): ?>
    <link href="<?php e($href)?>" hreflang="<?php e($code)?>" rel="<?php e($code == 'de' ? 'canonical' : 'alternate')?>" />
<?php endforeach ?>
</head>
<body>
    <a href="#main" tabindex="0" class="accessibility-aid">Skip to content</a>
