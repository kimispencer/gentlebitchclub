var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
// console.log(supportsTouch)

if (supportsTouch) {
    /* cache dom references */ 
    var $body = document.body; 
    console.log($body)

    /* bind events */
    $(document)
    .on('focus', 'input', function(e) {
        $body.addClass('fixfixed');
        console.log('fix')
    })
    .on('blur', 'input', function(e) {
        $body.removeClass('fixfixed');
        console.log('fix2')
    });
} 