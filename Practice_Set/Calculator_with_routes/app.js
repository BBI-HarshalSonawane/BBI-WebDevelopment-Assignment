const http = require('http');

const routes = require('./welcome');

const server = http.createServer(routes);  // this is for 1️⃣ way ✅

const port = 3000;
server.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});