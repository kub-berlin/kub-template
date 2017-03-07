// bypass the default javascript
setTimeout(function() {
    window.submitjnewsmod1 = function(name) {
        var form = document.getElementsByName(name)[0];
        form.submit();
    };
}, 100);
