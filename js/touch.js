var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
// console.log(supportsTouch)

// if (supportsTouch) {
    /* cache dom references */ 
    var $body = $('body');
        fixed = $('#Fixed');
    console.log($body)
    console.log(fixed)

    /* bind events */
    $(document)
    .on('focus', 'input', function(e) {
        $body.addClass('fixfixed');
        fixed.addClass('fixfixed');
        console.log('fix')
    })
    .on('blur', 'input', function(e) {
        $body.removeClass('fixfixed');
        fixed.addClass('fixfixed');
        console.log('fix2')
    });
// } 