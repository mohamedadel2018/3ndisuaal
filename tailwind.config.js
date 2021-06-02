module.exports = {
   purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                purple: {
                    450: '#a01da0',
                    150: '#a01da020',
                },
            },
            spacing: {
                192: '48rem',
                80: '32rem',
                76: '22rem',
                78: '22rem',
            },
            fontFamily: {
                'almarai': ['Almarai', 'sans-serif']
            },
            backgroundColor: theme => ({
                ...theme('colors'),
                'news-bg': '#58a09f',
            })
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
