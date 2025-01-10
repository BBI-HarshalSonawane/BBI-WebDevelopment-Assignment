const express = require('express');
const path = require('path');

const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅


myRouter.get('/', (req, res, next) => {

  // res.render('home'); // ✅ Here is "home.ejs" we render for ejs
  res.sendFile(path.join(rootDir, "views", "landingPage.html"));
});

myRouter.use((req, res, next) => {
  res.status(404).sendFile(path.join(rootDir, 'views' ,'404_page.html')); // Serve 404 page
});

// -----------------------------------------

module.exports = myRouter;
