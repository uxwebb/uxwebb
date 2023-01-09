console.log('hi wp admin');

const { __ } = wp.i18n;
const { registerBlockStyle } = wp.blocks;

registerBlockStyle( 'core/media-text' , {
    name: 'media-text-special',
    label: __( 'Media text special' ),
    isDefault: true,
});

registerBlockStyle( 'core/button' , {
    name: 'primary-button',
    label: __( 'Primär knapp' ),
    isDefault: true,
});

// registerBlockStyle( 'core/group' , {
//     name: 'marquee-wrapper',
//     label: __( 'Marquee' ),
//     isDefault: true,
// });