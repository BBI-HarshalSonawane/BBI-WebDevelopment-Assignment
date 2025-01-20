const express = require('express');
const path = require('path');

const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅

const adminData = require('./admin');

myRouter.get('/', (req, res, next) => {

  console.log('shop.js', adminData.myCardStore);

  // res.sendFile(path.join(rootDir, '../views/cards.html')); // ✅ like this 
  res.sendFile(path.join(rootDir,'views' ,'cards.html')); // ✅ like this 
});

myRouter.use((req, res, next) => {
  // res.status(404).sendFile(path.join(rootDir, '../views/404_page.html')); // Serve 404 page
  res.status(404).sendFile(path.join(rootDir, 'views' ,'404_page.html')); // Serve 404 page
});

// -----------------------------------------

module.exports = myRouter;
