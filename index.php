<?php include 'partials/head.php'; ?>
    <div id="header-container">
        <header id="header">
            <a href="<?php e($this->baseurl); ?>" class="brand-link">
                <img alt="<?php e($sitename); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.png" role="banner"/>
            </a>
            <?php kub_module('header-bottom'); ?>
        </header>
        <nav id="nav">
            <?php kub_module('search'); ?>
            <jdoc:include type="modules" name="navigation" />
        </nav>
    </div>

    <?php kub_module('top'); ?>

    <div id="main-container">
        <nav id="section-nav">
            <jdoc:include type="modules" name="navigation" />
        </nav>
        <main id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="main-bottom" />
        </main>
    </div>

    <?php kub_module('aside', 'aside'); ?>

<?php include 'partials/foot.php'; ?>
