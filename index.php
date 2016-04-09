<?php include 'partials/head.php'; ?>
    <div id="header-container">
        <header id="header">
            <a href="<?php e($this->baseurl); ?>" class="brand-link">
                <img alt="<?php e($sitename); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.svg" role="banner"/>
            </a>
            <jdoc:include type="modules" name="header-side" />
            <jdoc:include type="modules" name="header-bottom" />
        </header>
        <nav id="nav">
            <jdoc:include type="modules" name="navigation" />
        </nav>
    </div>

    <div id="top">
        <jdoc:include type="modules" name="top" />
    </div>

    <div id="main-container">
        <nav id="section-nav">
            <jdoc:include type="modules" name="navigation" />
        </nav>
        <main id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </main>
    </div>

    <aside id="aside">
        <jdoc:include type="modules" name="aside" />
    </aside>

<?php include 'partials/foot.php'; ?>
