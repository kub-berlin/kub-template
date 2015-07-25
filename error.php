<?php
defined('_JEXEC') or die;

/**
 * <jdoc:include /> is not available in this template. So the underlying code
 * is called directly.
 */

function jdocIncludeModules($position) {
    $modules = JModuleHelper::getModules($position);
    foreach ($modules as $module) {
        echo JModuleHelper::renderModule($module);
    }
}

$config = JFactory::getConfig();
$doc = JFactory::getDocument();
$sitename = $config->get('sitename');
$templatePath = "{$this->baseurl}/templates/{$this->template}";

// clear unneccessary scripts
$doc->_script = Array();
$doc->_scripts = Array();

$doc->setTitle($this->error->getCode() . ' - ' . $this->error->getMessage());
$doc->_metaTags['standard']['viewport'] = 'width=device-width, initial-scale=1.0';
$doc->_metaTags['http-equiv']['X-UA-Compatible'] = 'IE=edge,chrome=1';
$doc->_styleSheets["$templatePath/css/kub.css"] = null;

?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php echo $this->language; ?>"
    lang="<?php echo $this->language; ?>"
    dir="<?php echo $this->direction; ?>"
    prefix="s: http://schema.org/">
<head>
    <meta charset="utf-8" />
    <?php echo $doc->loadRenderer('head')->render(null) ?>
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <a href="/" class="brand-link"><span class="brand-title" role="banner"><?php echo $sitename; ?></span></a>
        <?php jdocIncludeModules('header') ?>
    </header>
    <nav>
        <?php jdocIncludeModules('navigation') ?>
    </nav>
    <main>
        <h1><?php echo $this->error->getCode(); ?> - <?php echo JText::_($this->error->getMessage()); ?></h1>
    </main>
    <aside>
        <?php jdocIncludeModules('aside') ?>
    </aside>
<?php include('partials/foot.php') ?>
