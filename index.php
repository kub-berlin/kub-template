<?php include('head.php') ?>
    <title><?php echo $sitename ?> — <?php echo $this->title; ?></title>
</head>
<body>
    <header>
        <a href="<?php echo $this->baseurl; ?>" class="brand-link"><span class="brand-title" role="banner"><?php echo $sitename; ?></span></a>
        <jdoc:include type="modules" name="header" />
    </header>
    <nav>
        <jdoc:include type="modules" name="navigation" />
    </nav>
    <main>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>
    <aside>
        <jdoc:include type="modules" name="aside" />
    </aside>
<?php include('foot.php') ?>
