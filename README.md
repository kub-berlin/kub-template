(unfinished) Joomla 3.x template for [KuB](http://kub-berlin.org).

# Installation

See https://docs.joomla.org/J3.x:Installing_a_template

# Development

1.  Install requirements

        npm install -g node-sass bower

2.  Run `make`

# Features

-   Fully responsive.
-   Left-to-right and right-to-left support.
-   Decent Accessibility.
-   [Open graph](http://ogp.me) support.
-   Written from scratch, so no legacy code.

# Expected Joomla configuration

This template is build for a specific Joomla configuration and may behave in
unexpected ways if you divert to far from these setting:

-   search
    -   A simple search module should go into the `search` position.
    -   A lanternfish language switcher may also go into the `search` position.
    -   In the global search settings, disable as much as possible.
-   header-bottom
    -   An address (custom HTML module with an `<adress>` tag) should go into
        the `header-bottom` position.
-   navigation
    -   The main menu should go to the `navigation` position.
    -   It should have exactly 5 entries in the top level.
    -   Only entries up to the third level are displayed.
    -   For every page that has subpages you should create a category of the
        same name. Then add a category module to the article in the
        `main-bottom` position. Use the default settings for that module, i.e.
        do not display anything other than the title.
-   shortcuts
    -   Another menu should go to the `top` position.
    -   It should have exactly 6 entries.
    -   Each entry should have a link image and all images should have the same
        size.
-   article
    -   In the global article settings, disable showing category, creation date,
        author and icons.
