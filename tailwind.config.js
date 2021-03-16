module.exports = {
	theme: {
		colors: {
			bemy: {
				dark: "#151A20",
				light: "#f2eddf",
				red: "#f54f4f",
			},
		},
		container: {
			padding: {
				default: '2rem',
				sm: '3rem',
				lg: '9vw',
			},
			center: true,
		},
		fontSize: {
			xs: ['max(calc(0.55rem + 0.3vw), 0.75rem)', { lineHeight: '1.6' }],
			sm: ['max(calc(0.7rem + 0.3vw), 0.875rem)', { lineHeight: '1.6' }],
			base: ['max(calc(1rem + 0.3vw), 1rem)', { lineHeight: '1.6' }],
			lg: ['max(calc(1.3rem + 0.3vw), 1rem)', { lineHeight: '1.6' }],
			xl: ['max(2.1vw, 1.25rem)', { lineHeight: '1.25' }],
			'2xl': ['max(2.8vw, 1.5rem)', { lineHeight: '1.25' }],
			'3xl': ['max(6.4vw, 2.5rem)', { lineHeight: '1.1' }],
		},
		screens: {
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'xxl': "1480px",
		},
	},
	variants: {},
	plugins: [],
	purge: [
		'./src/**/*.html',
		'./src/**/*.vue',
		'./src/**/*.jsx',
		'./**/*.php'
	]
};
