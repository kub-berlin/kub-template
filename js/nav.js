(function() {
    $(document).ready(function() {
        $('<a class="nav-toggle">')
            .append('<i class="fa fa-bars">')
            .click(function() {
                $('html').toggleClass('show-nav');
            })
            .appendTo('nav');
    });
})();
