<?php
defined('_JEXEC') or die;

$config = JFactory::getConfig();
$sitename = $config->get('sitename');
$templatePath = "{$this->baseurl}/templates/{$this->template}";

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
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $templatePath ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="<?php echo $templatePath ?>/css/kub.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
