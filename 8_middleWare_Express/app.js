
const express = require('express');

const app = express();

app.use((req, res, next) => {
    console.log('In the middleware!');
    next(); // Allows the request to continue to the next middleware in line i.e for "Hello from Express!" 👈👈👈
});

app.use((req, res, next) => {
    console.log('In another middleware!');
    res.send('<h1>Hello from Express!</h1>');
});

// ---------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
