const path = require('path');
module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'unisyn-policy-generator.min.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
        }]
    }
}