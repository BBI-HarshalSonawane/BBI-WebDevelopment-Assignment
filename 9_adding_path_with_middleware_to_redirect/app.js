const express = require('express');

const app = express();

app.use('/', (req, res, next) => {
    console.log('This always runs!');
    next();
});

// 👇 Here we adding path.

app.use('/add-product', (req, res, next) => {  // here we added a path '/add-product' 👈 to the middleware
  console.log('In another middleware!');
  res.send('<h1>The "Add Product" Page</h1>');
});

app.use('/', (req, res, next) => {  // here we added a path '/' 👈 means anything start with '/' 👈 will redirect to 👉👉  "Hello from Express!"
  console.log('In another middleware!');
  res.send('<h1>Hello from Express!</h1>');
  
});

//--------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
