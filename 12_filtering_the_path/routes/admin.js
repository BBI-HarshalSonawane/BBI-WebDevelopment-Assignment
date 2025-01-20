const express = require('express');

const router = express.Router();

// ✅ get
// router.get('admin/add-product', (req, res, next) => {  // same as below just we need to remove "/admin" from here 👉 app.use('/admin', adminRoutes); 👈 in app.js file
router.get('/add-product', (req, res, next) => {  // ✅ '/add-product' is same as '/admin/add-product' but "get" 👈 method here
  res.send( // 👆👆
    '<form action="/admin/add-product" method="POST"><input type="text" name="title"><button type="submit">Add Product</button></form>'
  );
});

// ✅ post

router.post('/add-product', (req, res, next) => { // ✅ '/add-product' is same as above 👆👆👆 but "post" 👈 method here
  console.log(req.body);
  res.redirect('/');
});

module.exports = router;
