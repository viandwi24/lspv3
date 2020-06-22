module.exports = {
    purge: [],
    theme: {
        extend: {},
        textShadow: { // defaults to {}
            'default': '0 2px 5px rgba(0, 0, 0, 0.5)',
            'lg': '0 2px 10px rgba(0, 0, 0, 0.5)',
        },
        container: {
            padding: {
                default: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
            },
        },
    },
    variants: {},
    plugins: [
        require('tailwindcss-typography')({
            ellipsis: true,       
            hyphens: true,        
            kerning: true,        
            textUnset: true,      
            componentPrefix: 'c-',
        }),
    ],
}