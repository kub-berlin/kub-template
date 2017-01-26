<?php include 'partials/head.php'; ?>
    <div id="header-container">
        <header id="header">
            <a href="<?php e(jfGetHome()); ?>" class="brand-link" rel="home">
                <picture>
                    <source srcset="<?php e($this->baseurl); ?>/templates/kub/images/logo.svg" type="image/svg+xml" />
                    <img alt="<?php e(JFactory::getConfig()->get('sitename')); ?>" src="<?php e($this->baseurl); ?>/templates/kub/images/logo.png" />
                </picture>
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
                <div class="homeRow">
                    <?php include('partials/home.php'); ?>
                </div>
                <jdoc:include type="modules" name="main-bottom" />
            </main>
        <?php else : ?>
            <nav id="section-nav">
                <jdoc:include type="modules" name="navigation" />
            </nav>
            <main id="main" class="m-sidenav">
                <jdoc:include type="message" />
                <?php kub_component(); ?>
                <jdoc:include type="modules" name="main-bottom" />

                <ul class="subpages">
                <?php foreach (kub_get_submenu() as $item) : ?>
                    <li class="subpage"><a href="<?php e(JRoute::_('index.php?Itemid=' . $item->id)); ?>"><?php e($item->title); ?></a></li>
                <?php endforeach ?>
                </ul>
            </main>
            <?php kub_module('aside', 'aside'); ?>
        <?php endif; ?>
    </div>

<?php include 'partials/foot.php'; ?>
