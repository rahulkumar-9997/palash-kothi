$(document).ready(function(){
    $(window).on('load', function () {
        var $container = $('.grid-services');
          $container.isotope({
              filter: '*',
        });
    });    
});
