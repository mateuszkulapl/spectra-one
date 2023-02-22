const defaultConfig     = require( '@wordpress/scripts/config/webpack.config' );

module.exports = env => {
	return {
		...defaultConfig,

		module: {
			...defaultConfig.module
		},

		entry: {
			editor: './src/editor.js',
			welcome_notice: './src/admin/welcome-notice.js',
		},

		plugins: [
			...defaultConfig.plugins,
		]
	};
};

