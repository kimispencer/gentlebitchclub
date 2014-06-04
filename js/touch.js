var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
// console.log(supportsTouch)

if (supportsTouch) {
    console.log('yo')
    /* cache dom references */ 
    var $body = jQuery('body'); 

    /* bind events */
    $(document)
    .on('focus', 'input', function(e) {
        $body.addClass('fixfixed');
    })
    .on('blur', 'input', function(e) {
        $body.removeClass('fixfixed');
    });
} 