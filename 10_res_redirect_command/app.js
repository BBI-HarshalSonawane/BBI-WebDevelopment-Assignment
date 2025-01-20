
const express = require('express');

const bodyParser = require('body-parser');

const app = express();

app.use(bodyParser.urlencoded({extended: false}));

app.use('/add-product', (req, res, next) => {
  res.send(`<form action="/product" method="POST">
            <input type="text" name="title">
            <button type="submit">Add Product</button>
          </form>`);
}); // here we use /product as redirecting path in form "action" 👈👈👈

app.post('/product', (req, res, next) => {
    console.log(req.body);
    res.redirect('/'); // ✅✅ it will redirect to the root path '/' 👈👈👈
});

app.use('/', (req, res, next) => {
  res.send('<h1>Hello from Express!</h1>');
});

//--------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
