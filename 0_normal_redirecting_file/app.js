const http = require('http');
const fs = require('fs');
const path = require('path');
const hostname = 'localhost';
const port = 3000;

const server = http.createServer((req, res) => {
    console.log('Request for ' + req.url + ' by method ' + req.method);

    if (req.method === 'GET') {
        let fileUrl;
        if (req.url === '/') {
            fileUrl = '/index.html';
        } else {
            fileUrl = req.url;
        }

        const filePath = path.resolve('./public' + fileUrl);
        const fileExt = path.extname(filePath);
        console.log('fileExt ', fileExt);

        if (fileExt === '.html') {
            fs.access(filePath, fs.constants.F_OK, (err) => {
                if (err) {
                    res.statusCode = 404;
                    res.setHeader('Content-Type', 'text/html');
                    res.end(`<html><body><h1>Error 404: ${fileUrl} not found</h1></body></html>`);
                    return;
                }

                res.statusCode = 200; // 200 is the status code for success ✅
                res.setHeader('Content-Type', 'text/html');
                fs.createReadStream(filePath).pipe(res); // pipe the readable stream to the response object Example: fs.create
            });

        } else {
            res.statusCode = 404;
            res.setHeader('Content-Type', 'text/html');
            res.end(`<html><body><h1>Error 404: ${fileUrl} is not an HTML file</h1></body></html>`);
        }
        
    } else {
        res.statusCode = 404;
        res.setHeader('Content-Type', 'text/html');
        res.end(`<html><body><h1>Error 404: ${req.method} not supported</h1></body></html>`);
    }
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
console.log('"hello"', "hello");

// for above code to work, create a folder named public and add index.html file in it.
// then run the app.js file using node app.js
// open the browser and type http://localhost:3000/ to see the output















