<?php
defined('_JEXEC') or die;

$config = JFactory::getConfig();
$sitename = $config->get('sitename');
$templatePath = "{$this->baseurl}/templates/{$this->template}";

// clear unneccessary scripts
$this->_script = Array();
$this->_scripts = Array();

$this->setTitle("$sitename - {$this->getTitle()}");
$this->_metaTags['standard']['viewport'] = 'width=device-width, initial-scale=1.0';
$this->_metaTags['http-equiv']['X-UA-Compatible'] = 'IE=edge,chrome=1';
$this->_styleSheets["$templatePath/css/kub.css"] = null;

?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php echo $this->language; ?>"
    lang="<?php echo $this->language; ?>"
    dir="<?php echo $this->direction; ?>"
    prefix="s: http://schema.org/">
<head>
    <meta charset="utf-8">
    <jdoc:include type="head" />
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
