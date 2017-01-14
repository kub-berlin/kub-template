<?php include 'partials/head.php'; ?>
    <div id="header-container">
        <header id="header">
            <a href="<?php e(jfGetHome()); ?>" class="brand-link" rel="home">
                <img alt="<?php e(JFactory::getConfig()->get('sitename')); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.png" />
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
        <?php if ($this->countModules( 'home' )) : ?>
            <main id="main">
                <jdoc:include type="message" />
                <?php include('partials/home.php'); ?>
                <jdoc:include type="modules" name="main-bottom" />
            </main>
        <?php else : ?>
            <nav id="section-nav">
                <jdoc:include type="modules" name="navigation" />
            </nav>
            <main id="main" class="m-sidenav">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="main-bottom" />
            </main>
            <?php kub_module('aside', 'aside'); ?>
        <?php endif; ?>
    </div>

<?php include 'partials/foot.php'; ?>
