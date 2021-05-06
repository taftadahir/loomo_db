module.exports = {
  purge: {
      enabled: false, // Enable on production(permet de supprimer toutes les classes tailwindcss non utilisées)
      content: [
          './storage/framework/views/*.php',
          './resources/**/*.blade.php',
          './resources/**/*.js',
          './resources/**/*.vue'
      ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
      colors: {
          transparent: 'transparent',
          current: 'currentColor',
          black: '#232431',
          black: '#232431',
          black2: '#2D3041',
          white: '#dae2e5',
          gray: '#6b6f78',
          error: '#f83663',
          success: '#00ffcb',
          primary: '#457b9d',
      },
      extend: {
          gridTemplateRows: {
              'layout': '80px 1fr'
          },
          width: {
              '80-vw': '80vw',
              'xl': '36rem'
          },
          translate: {
              '1/5': '20%',
              '-1/5': '-20%',
              '80-vw': '80vw',
              '-80-vw': '-80vw',
            },
      },
  },
  variants: {
      extend: {
        translate: ['active', 'group-hover'],
        height: ['group-hover']
      },
  },
  plugins: [],
}
