const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

module.exports = () => {
	return {
		...defaultConfig,

		module: {
			...defaultConfig.module,
		},

		entry: {
			script: './src/script.js',
			editor: './src/editor.js',
			welcome_notice: './src/admin/welcome-notice.js',
			settings: './src/admin/settings.js',
		},

		plugins: [ ...defaultConfig.plugins ],
	};
};
