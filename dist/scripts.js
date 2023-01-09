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

    // init Isotope
    var $grid = $('.loop-wrapper').isotope({
        itemSelector: '.loop-item',
        stagger: 100,
        layoutMode: 'fitRows'

    });
    // filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
    });


    // Mobile menu add class stuff
    $('.burger-wrapper').click(function() {
        $("header .menu").toggleClass('active');
        $(this).toggleClass('active');
    });


});
