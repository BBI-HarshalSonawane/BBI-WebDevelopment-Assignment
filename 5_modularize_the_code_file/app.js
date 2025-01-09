const http = require('http');

const routes = require('./handler');

// console.log(routes.someText);    //  this is for 2️⃣ 3️⃣ & 4️⃣ way ✅
// const server = http.createServer(routes.handler);  //  this is for 2️⃣ 3️⃣ & 4️⃣ way ✅

const server = http.createServer(routes);  // this is for 1️⃣ way ✅

const port = 3000;
server.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});

