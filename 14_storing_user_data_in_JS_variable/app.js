const path = require('path');

// -----
const express = require('express');
const bodyParser = require('body-parser');
const app = express();
app.use(bodyParser.urlencoded({extended: false}));// rather than string and array nothing will allow becz of "false" 👈👈👈
// -----

// this above 4 lines for req, res data taking like 👉 req.body.title

const adminData = require('./routes/admin');
const shopRoutes = require('./routes/shop');


app.use(express.static(path.join(__dirname, 'public')));

app.use('/admin', adminData.routes);
app.use(shopRoutes);

app.use((req, res, next) => {
    res.status(404).sendFile(path.join(__dirname, 'views', '404.html'));
});


//--------------------------------------------
const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
