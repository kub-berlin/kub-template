<?php include('head.php') ?>
    <title><?php echo JText::_('404 Not Found') ?></title>
</head>
<body>
    <header>
        <a href="/" class="brand-link"><span class="brand-title" role="banner"><?php echo $sitename; ?></span></a>
        <jdoc:include type="modules" name="header" />
    </header>
    <nav>
        <jdoc:include type="modules" name="navigation" />
    </nav>
    <main>
        <h1><?php echo JText::_('404 Not Found') ?></h1>
    </main>
    <aside>
        <jdoc:include type="modules" name="aside" />
    </aside>
<?php include('foot.php') ?>
