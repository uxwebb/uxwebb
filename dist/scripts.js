jQuery(document).ready(function($){

    // Lenis scroll
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    })
    
    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }
    
    requestAnimationFrame(raf)


    // Mobile menu add class stuff
    $('.burger-wrapper').click(function() {
        $("header .menu").toggleClass('active');
        $(this).toggleClass('active');
    });


});
