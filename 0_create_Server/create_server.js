
const myHttp = require("http");

const myServer = myHttp.createServer((req, res)=>{
    console.log("Server started");
    
    // process.exit(); // 👈👈 it was mainly use for exiting() from server when server will get it's 1st req

    console.log("Url ",req.url,"\n", "Method ", req.method, "\n", "Header", req.headers);


})

const port = 3000;
myServer.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});



