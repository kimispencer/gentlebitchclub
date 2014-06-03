console.log('hello');

/* we need this only on touch devices */
if (Modernizr.touchEvents) {
    alert('touch screen');
    /* cache dom references */ 
    // var $body = jQuery('body'); 

    /* bind events */
    // $(document)
    // .on('focus', 'input', function(e) {
    //     $body.addClass('fixfixed');
    // })
    // .on('blur', 'input', function(e) {
    //     $body.removeClass('fixfixed');
    // });
} 