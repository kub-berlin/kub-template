(unfinished) Joomla 3.x template for [KuB](http://kub-berlin.org).

# Installation

See https://docs.joomla.org/J3.x:Installing_a_template

# Development

1.  Install requirements

        npm install -g node-sass

2.  Run `make`

3.  Once you are finished with a new feature, add the compiled files to the
    repository. Please add the updated CSS files in a separate commit.

# Expected Joomla configuration

This template is build for a specific Joomla configuration and may behave in
unexpected ways if you divert to far from these setting:

-   search
    -   A simple search module should go into the `search` position.
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
-   article
    -   In the global article settings, disable showing category, author and
        icons.
