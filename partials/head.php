<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$templatePath = JPATH_BASE . "/templates/{$this->template}";
$dir = $this->direction;

include_once "$templatePath/functions.php";

function setKubHead() {
    $doc = JFactory::getDocument();

    $templateUrl = "{$doc->baseurl}/templates/{$doc->template}";
    $dir = $doc->direction;

    // clear unneccessary scripts
    $doc->_script = Array();
    $doc->_scripts = Array();
    $doc->_style = Array();
    $doc->_styleSheets = Array();

    $doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0');
    $doc->setMetaData('X-UA-Compatible', 'IE=edge,chrome=1', True);
    $doc->addStyleSheet("$templateUrl/bower_components/normalize-css/normalize.css");
    $doc->addStyleSheet("$templateUrl/css/kub-$dir.css");
    $doc->addScript("$templateUrl/js/nav.js");
    $doc->addScript("$templateUrl/js/table.js");
    $doc->addScript("$templateUrl/js/accordion.js");

    kub_opengraph($doc);
}

$app->registerEvent('onBeforeCompileHead', 'setKubHead');

?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php e($this->language); ?>"
    lang="<?php e($this->language); ?>"
    dir="<?php e($dir); ?>"
    prefix="s: http://schema.org/ og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
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
