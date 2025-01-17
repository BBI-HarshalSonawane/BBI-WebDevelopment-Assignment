const express = require('express');
const path = require('path');

const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅


myRouter.get('/', (req, res, next) => {

  // res.render('home'); // ✅ Here is "home.ejs" we render for ejs
  // res.sendFile(path.join(rootDir, "views", "landingPage.html"));

  res.render('landingPage'); // ✅ Here is "home.ejs" we render for ejs
});

myRouter.get('/home', (req, res, next) => {
  res.render("home"); // Render home.ejs
});

myRouter.get('/add-product', (req, res, next) => { 
  res.render('form');  // Assumes "views/form.ejs" exists
});

myRouter.get('/forgotpassword', (req, res, next) => { 
  res.render('forgotPwd');  // Assumes "views/form.ejs" exists
});

myRouter.use((req, res, next) => {
  res.status(404).sendFile(path.join(rootDir, 'views' ,'404_page.html')); // Serve 404 page
});

// -----------------------------------------

module.exports = myRouter;
