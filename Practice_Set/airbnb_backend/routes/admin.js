const path = require('path');
const express = require('express');
const app = express();
const multer = require('multer');
const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅

const myCardStore = [];

myRouter.get('/add-product', (req, res, next) => {    // here app.get() ❌ not working 
  
  //  res.sendFile(path.join(__dirname, '../views/form.html'));  // earlier we use like this with 👉 "__dirname" & 👉  "../views/form.html" like this but now i we use 👉👉 "rootDir" 👇👇👇👇
   res.sendFile(path.join(rootDir, 'views' ,'form.html'));  // 👈👈 new way then above 👆 
// 👆 "sendFile" file for rendering "html" file
});

//------------------------------------------------------------------------




// myRouter.post('/product', (req, res, next) => {
//   const {firstname ,lastname,country,subject,houseImage} = req.body;
//   console.log(req.body);          // ✅ req.body is working because we use "express.urlencoded({ extended: true })" in app.js
  
//   myCardStore.push({ firstname : firstname,
//     lastname : lastname,
//     country : country,
//     subject : subject,
//     houseImage : houseImage,
//    });
   
//   res.redirect('/home');   // ✅

// });



const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads/'); // Directory to save images
  },
  filename: (req, file, cb) => {
    cb(null, Date.now() + path.extname(file.originalname)); // Use a timestamp to avoid filename conflicts
  }
});
const upload = multer({ storage: storage });

//----------------------

// Serve the form
myRouter.get('/add-product', (req, res, next) => {
  res.sendFile(path.join(rootDir, 'views', 'form.html'));
});

// Handle the form submission (POST request)
myRouter.post('/product', upload.single('houseImage'), (req, res, next) => {
  // Extract text fields from req.body
  const { firstname, lastname, country, description } = req.body;
  
  // Extract the uploaded image path from req.file
  const houseImage = req.file ? req.file.path : null;  // Save the path of the uploaded image

  // Log for debugging purposes
  console.log(req.body);  // Logs form fields
  console.log(req.file);   // Logs file information

  // Push data into the myCardStore array
  myCardStore.push({
    firstname,
    lastname,
    country,
    description,
    houseImage
  });

  // Redirect or send a response after successful submission
  res.redirect('/home'); // Adjust the redirect path as needed
});








// -----------------------------------------

module.exports = myRouter;
module.exports.myCardStore = myCardStore;


