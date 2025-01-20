

const http = require('http');
const fs = require('fs');

const myServer = http.createServer((req, res) => {
   console.log('Server started....')

   if(req.url.toLowerCase() === '/home'){
        res.write('<html>');
        res.write('<head><title>Welcome to home page</title></head>');
        res.write('<body><h1>Home Page</h1></body>');
        res.write('</html>');
        return res.end();
    }else if(req.url.toLowerCase() === '/men'){
        res.write('<html>');
        res.write('<head><title>Welcome to home page</title></head>');
        res.write('<body><h1>men Page</h1></body>');
        res.write('</html>');
        return res.end();
    }else if(req.url.toLowerCase() === '/women'){
        res.write('<html>');
        res.write('<head><title>Welcome to home page</title></head>');
        res.write('<body><h1>women Page</h1></body>');
        res.write('</html>');
        return res.end();
    }else if(req.url.toLowerCase() === '/kids'){
        res.write('<html>');
        res.write('<head><title>Welcome to home page</title></head>');
        res.write('<body><h1>kids Page</h1></body>');
        res.write('</html>');
        return res.end();
    }else if(req.url.toLowerCase() === '/cart'){
        res.write('<html>');
        res.write('<head><title>Welcome to home page</title></head>');
        res.write('<body><h1>cart Page</h1></body>');
        res.write('</html>');
        return res.end();
    }
    res.write(`
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Myntra</title>
            </head>
            <body>
                <nav>
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/men">mens</a></li>
                        <li><a href="/women">women</a></li>
                        <li><a href="/kids">kids</a></li>
                        <li><a href="/cart">cart</a></li>
                    </ul>
                </nav>
            </body>
            </html>
    `);
    res.end();
});

const port = 3000;
myServer.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});





