<div class="homeRow" vocab="http://schema.org/" typeof="NGO" resource="https://kub-berlin.org/#kub">
    <div class="homeRow-about" property="description">
        <jdoc:include type="modules" name="home" />
    </div>
    <div class="homeRow-map" property="location" typeof="place">
        <a href="https://www.openstreetmap.org/node/874357616" property="hasMap" rel="external" target="_blank">
            <img src="<?php e($doc->baseurl); ?>/templates/kub/images/stadtplan.svg" alt="Stadtplan" />
        </a>
        <div property="geo" typeof="GeoCoordinates">
            <meta property="latitude" content="52.5026297" />
            <meta property="longitude" content="13.4133911" />
        </div>
    </div>
    <address class="homeRow-address">
        <strong property="name">Kontakt- und Beratungsstelle für Flüchtlinge und Migrant_innen e.V.</strong>
        <p property="address" typeof="PostalAddress">
            <span property="streetAddress">Oranienstr. 159</span><br />
            <span property="postalCode">10969</span> <span property="addressLocality">Berlin-Kreuzberg</span>
        </p>
        <p>
            <?php echo JText::_("TPL_KUB_TELEPHONE"); ?>: <a href="tel:+49-30-614-94-00" property="telephone">030 / 614 94 00</a><br />
            <?php echo JText::_("TPL_KUB_FAX"); ?>: <span property="faxNumber">030 / 615 45 34</span><br />
            <?php echo JText::_("TPL_KUB_EMAIL"); ?>:  <a property="email" href="mailto:kontakt@kub-berlin.org">kontakt@kub-berlin.org</a><br />
            <a href="http://www.kub-berlin.org/images/stories/kub-pubkey.asc">Public PGP-Key</a>
        </p>
        <p>
            <?php echo JText::_("TPL_KUB_SUBWAY"); ?>: U8 Mortizplatz<br />
            <?php echo JText::_("TPL_KUB_BUS"); ?>: M29 Moritzplatz
        </p>
        <div property="openingHours" content="Mo,Tu,Th,Fr 09:00-19:00,We 14:00-19:00">
            <jdoc:include type="modules" name="opening-hours" />
        </div>
    </address>
</div>
