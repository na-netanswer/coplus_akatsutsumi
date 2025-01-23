const path = require("path");
const TerserPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
	devtool: 'source-map', //mapファイルを出力
	context: path.join(__dirname, 'src', 'js'), //srcの場所を設定

	// コンパイル元の設定
	entry: {
		main: './index.js',
	},

	// コンパイル先の設定
	output: {
		path: path.join(__dirname, 'setagayaakatsutsumi_ch', 'assets'),
		filename: 'js/[name].js',
	},

	module: {
		rules: [
			// css
			{
				test: /\.(scss|sass|css)$/,
				use: [
					MiniCssExtractPlugin.loader, //cssを外部ファイルとして出力
					{
						loader: 'css-loader', //cssの読み込み
						options: {
							url: {
								filter: (url) => {
									// imgフォルダの画像はバンドルしない
									if (url.includes("/img/")) {
										return false;
									}
									return true;
								},
							},
						}
					},
					'sass-loader' //sassの読み込み
				],
			},
			
			// 画像
			{
                test: /\.(png|jpe?g|gif|webp|svg)$/i,
				generator: {
					filename: 'img/lib/[hash][ext]'
				},
                type: 'asset/resource'
            },

			// フォント
			{
                test: /\.(woff|woff2|eot|ttf|otf)$/i,
				generator: {
					filename: 'fonts/lib/[hash][ext]'
				},
                type: 'asset/resource'
            },
		]
	},

	plugins: [
		new MiniCssExtractPlugin({
			filename: 'css/style.css', //出力ファイル名
		}),
	],

	watchOptions: {
        ignored: /node_modules/
    },

	optimization: {
		// licence.txtを出力しない
		minimizer: [new TerserPlugin({
			extractComments: false,
		})],
	},
} 