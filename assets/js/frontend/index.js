$(document).ready(function(){  
    handleSearchV1();
});

function handleSearchV1() {
    jQuery('.search-button').click(function () {
        jQuery('.search-open').slideDown();
    });

    jQuery('.search-close').click(function () {
        jQuery('.search-open').slideUp();
    });

    jQuery(window).scroll(function(){
      if(jQuery(this).scrollTop() > 1) jQuery('.search-open').fadeOut('fast');
    });

}