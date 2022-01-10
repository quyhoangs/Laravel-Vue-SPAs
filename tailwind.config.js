// tailwind.config.js
module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {  fontFamily: {
    'sans': ['ui-sans-serif', 'system-ui', ],
    'serif': ['ui-serif', 'Georgia', ],
    'mono': ['ui-monospace', 'SFMono-Regular', ],
    'display': ['Oswald', ],
    'body': ['"Open Sans"', ],
  },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}