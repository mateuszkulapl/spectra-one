const defaultConfig     = require( '@wordpress/scripts/config/webpack.config' );

module.exports = env => {
	return {
		...defaultConfig,

		module: {
			...defaultConfig.module
		},

		entry: {
			editor: './src/editor.js',
		},

		plugins: [
			...defaultConfig.plugins,
		]
	};
};

