(function ($) {
    $.fn.preventKeyboard = function () {
        return this
            .filter('input')
            .on('focus', function () {
                $(this)
                    .attr('readonly', 'readonly')
                    .blur()
                    .removeAttr('readonly');
            });
    };
}(jQuery));