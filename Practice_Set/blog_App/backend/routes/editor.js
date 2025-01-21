const path = require('path');
const express = require('express');
const app = express();
const multer = require('multer');
const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅

const myCardStore = [];

myRouter.get('/add-product', (req, res, next) => {    // here app.get() ❌ not working 
   res.sendFile(path.join(rootDir, 'views' ,'form.html'));  // 👈👈 new way then above 👆 
// 👆 "sendFile" file for rendering "html" file
});

module.exports = myRouter;