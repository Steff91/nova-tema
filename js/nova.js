//$.noConflict();
jQuery(document).ready(function ($) {

    $(document).on('click', '.open-search > a', function(e) {
        e.preventDefault();
       // console.log('Hejejejejej');
        $('.search-form-continer').slideToggle(100);
    })

});