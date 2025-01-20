const path = require('path');
const express = require('express');
const app = express();

// path module instead of "__dirname"
const rootDir = require("./utils/pathUtils");

//--------------------------------------------

// Set EJS as the view engine   👇👇👇👇
app.set('view engine', 'ejs');

// view static file located
app.set('views', path.join(rootDir, 'views'));

//--------------------------------------------

// 👇👇👇👇 this middleware is for css files linking statically

// app.use(express.static(path.join(__dirname, 'views')));    // ✅✅ not req becz of css file we place in "public" folder
app.use(express.static(path.join(rootDir, 'public')));     // ✅✅ to render static folder for "css" 👉👉 "rootDir" use instead of __dirname absolute path we place in "utils" folder

//--------------------------------------------
app.use(express.json());
app.use(express.urlencoded({ extended: true }));    // ✅✅ line use for body-parser in express getting user data by req --> "req.body", Here ✅ "true" means allow "string" and "array" along with other datatype, and if ❌ "false" then only allow "string" and "array"

//--------------------------------------------

const adminRoutes = require('./routes/admin');
const homeRoutes = require('./routes/home');


app.use("/admin",adminRoutes); // here we export the routes from admin.js it is (use) middleware and execute the app.js
app.use("/home",homeRoutes); // same as above because we show "home page" to user

//--------------------------------------------
app.use((req, res, next) => {  // this middleware is work for every request by default, but becz of we use it at the end, then all unknown route after the "/" this middleware work
    res.status(404).sendFile(path.join(rootDir,'views' ,'404_page.html'));
})
//--------------------------------------------









//--------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
