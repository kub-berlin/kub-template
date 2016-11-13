<?php
defined('_JEXEC') or die;

/**
 * <jdoc:include /> is not available in this template. So the underlying code
 * is called directly.
 */

$config = JFactory::getConfig();
$doc = JFactory::getDocument();
$sitename = $config->get('sitename');
$templateUrl = "{$this->baseurl}/templates/{$this->template}";
$templatePath = JPATH_BASE . "/templates/{$this->template}";
$dir = $doc->direction;

include_once "$templatePath/functions.php";

// clear unneccessary scripts
$doc->_script = Array();
$doc->_scripts = Array();

$doc->setTitle($this->error->getCode() . ' - ' . $this->error->getMessage());
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0');
$doc->setMetaData('X-UA-Compatible', 'IE=edge,chrome=1', True);
$doc->addStyleSheet("$templateUrl/bower_components/normalize-css/normalize.css");
$doc->addStyleSheet("$templateUrl/css/kub-$dir.css");
$doc->addScript("$templateUrl/js/nav.js");
$doc->addScript("$templateUrl/js/table.js");

?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php e($this->language); ?>"
    lang="<?php e($this->language); ?>"
    dir="<?php e($this->direction); ?>"
    prefix="s: http://schema.org/">
<head>
    <meta charset="utf-8" />
    <?php echo $doc->loadRenderer('head')->render(null) ?>
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div id="header-container">
        <header id="header">
            <a href="<?php e($this->baseurl); ?>" class="brand-link">
                <img alt="<?php e($sitename); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.png" role="banner"/>
            </a>
            <?php kub_module('header-bottom'); ?>
        </header>
        <nav id="nav">
            <?php kub_module('search'); ?>
            <?php jdocIncludeModules('navigation') ?>
        </nav>
    </div>
    <div id="main-container">
        <main id="main" class="m-sidenav">
            <div class="page-header">
                <h2><?php e($this->error->getCode()); ?> - <?php e(JText::_($this->error->getMessage())); ?></h2>
            </div>
            <?php kub_module('error'); ?>
        </main>
        <?php kub_module('aside', 'aside'); ?>
    </div>
<?php include 'partials/foot.php'; ?>
