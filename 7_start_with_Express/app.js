
// here note that in express we don't need the "http package" for create "server"
// 👇👇👇 like below and we can listen with server directly by calling with "app"

// const http = require('http');
// const myServer = http.createServer(app);



const myExpress = require('express');

const app = myExpress();

//------------------------------------------------------------

app.use((req, res, next)=>{
    console.log("Into 1st middleware ", req.url, req.method);
    next();
});

app.use((req, res, next)=>{
    console.log("Into 2nd middleware ", req.url, req.method);
    res.send("<h1>Welcome to our page!!! </h1>")
});

//------------------------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
