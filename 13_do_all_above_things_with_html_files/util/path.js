const path = require('path');

module.exports = path.dirname(require.main.filename); // This will give us the path of the main module file i.e app.js file.

