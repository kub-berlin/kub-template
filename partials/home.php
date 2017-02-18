<div vocab="http://schema.org/" typeof="NGO Place" resource="https://kub-berlin.org/#kub">
    <?php if ($doc->countModules( 'home' )) : ?>
    <div class="homeRow-about" property="description">
        <jdoc:include type="modules" name="home" />
    </div>
    <?php endif; ?>
    <div class="homeRow-map" property="location" typeof="place">
        <a href="https://www.openstreetmap.org/node/874357616" property="hasMap" target="_blank">
            <img src="<?php e($doc->baseurl); ?>/templates/kub/images/stadtplan.svg" alt="Stadtplan" />
        </a>
        <div property="geo" typeof="GeoCoordinates">
            <meta property="latitude" content="52.5026297" />
            <meta property="longitude" content="13.4133911" />
        </div>
    </div>
    <address class="homeRow-address">
        <strong property="name"><bdi>Kontakt- und Beratungsstelle für Flüchtlinge und Migrant_innen e.V.</bdi></strong>
        <p property="address" typeof="PostalAddress">
            <bdi property="streetAddress">Oranienstr. 159</bdi><br />
            <bdi><span property="postalCode">10969</span> <span property="addressLocality">Berlin-Kreuzberg</span></bdi>
        </p>
        <p>
            <?php echo JText::_("TPL_KUB_TELEPHONE"); ?>: <a href="tel:+49-30-614-94-00" property="telephone"><bdi>030 / 614 94 00</bdi></a><br />
            <?php echo JText::_("TPL_KUB_FAX"); ?>: <bdi property="faxNumber">030 / 615 45 34</bdi><br />
            <?php echo JText::_("TPL_KUB_EMAIL"); ?>:  <a property="email" href="mailto:kontakt@kub-berlin.org">kontakt@kub-berlin.org</a><br />
            <a href="<?php e($doc->baseurl); ?>/images/kub-pubkey.asc" target="_blank"><bdi>Public PGP-Key</bdi></a>
        </p>
        <p>
            <?php echo JText::_("TPL_KUB_SUBWAY"); ?>: <bdi>U8 Mortizplatz</bdi><br />
            <?php echo JText::_("TPL_KUB_BUS"); ?>: <bdi>M29 Moritzplatz</bdi>
        </p>
        <div property="openingHoursSpecification" content="Mo,Tu,Th,Fr 09:00-19:00,We 14:00-19:00">
            <jdoc:include type="modules" name="opening-hours" />
        </div>
    </address>
</div>
