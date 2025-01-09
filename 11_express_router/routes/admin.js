const express = require('express');

const app = express();

const router = express.Router();

router.get('/add-product', (req, res, next) => {    // here app.get() ❌ not working 
  res.send(
    '<form action="/product" method="POST"><input type="text" name="title"><button type="submit">Add Product</button></form>'
  );
});

router.post('/product', (req, res, next) => {
  console.log(req.body);
  res.redirect('/');
});

// -----------------------------------------

module.exports = router;
