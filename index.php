<?php include 'partials/head.php'; ?>
    <header id="header">
        <a href="<?php e($this->baseurl); ?>" class="brand-link"><span class="brand-title" role="banner"><?php e($sitename); ?></span></a>
        <jdoc:include type="modules" name="header" />
    </header>
    <nav id="nav">
        <jdoc:include type="modules" name="navigation" />
    </nav>
    <main id="main">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
    </main>
    <aside id="aside">
        <jdoc:include type="modules" name="aside" />
    </aside>
<?php include 'partials/foot.php'; ?>
