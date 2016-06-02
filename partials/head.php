<?php
defined('_JEXEC') or die;

$config = JFactory::getConfig();
$sitename = $config->get('sitename');
$templateUrl = "{$this->baseurl}/templates/{$this->template}";
$templatePath = JPATH_BASE . "/templates/{$this->template}";
$dir = $this->direction;

include_once "$templatePath/functions.php";

// clear unneccessary scripts
$this->_script = Array();
$this->_scripts = Array();

$this->setTitle("$sitename - {$this->getTitle()}");
$this->setMetaData('viewport', 'width=device-width, initial-scale=1.0');
$this->setMetaData('X-UA-Compatible', 'IE=edge,chrome=1', True);
$this->addStyleSheet("$templateUrl/bower_components/normalize-css/normalize.css");
$this->addStyleSheet("$templateUrl/css/kub-$dir.css");
$this->addScript("$templateUrl/js/nav.js");

kub_opengraph($this);

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
</head>
<body>
