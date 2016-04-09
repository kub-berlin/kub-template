<?php include 'partials/head.php'; ?>
    <div id="header-container">
        <header id="header">
            <a href="<?php e($this->baseurl); ?>" class="brand-link">
                <img alt="<?php e($sitename); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.svg" role="banner"/>
            </a>
            <jdoc:include type="modules" name="header-1" />
            <jdoc:include type="modules" name="header-2" />
        </header>
        <nav id="nav">
            <jdoc:include type="modules" name="navigation" />
        </nav>
    </div>

    <jdoc:include type="mudules" name="top" />

    <div id="main-container">
        <nav id="section-nav">
            <jdoc:include type="modules" name="navigation" />
        </nav>
        <main id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </main>
    </div>

    <jdoc:include type="mudules" name="bottom" />

<?php include 'partials/foot.php'; ?>
