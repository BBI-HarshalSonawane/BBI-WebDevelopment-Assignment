
const calculationHandler = require("./calculation");
const homePageHandler = require("./home");
const sumResultHandler = require("./result");

const requestHandler = (req, res) => {
    
    const url = req.url;
    const method = req.method;

    if (url === '/') {
        return homePageHandler(req, res);
    }
    else if(url.toLowerCase() === '/calculation'){
        return calculationHandler(req, res);
    }
    else if(url.toLowerCase() === '/result' && method=== 'POST'){
        return sumResultHandler(req, res);
    }
    else{

        res.setHeader('Content-Type', 'text/html');
        res.write(`
            <html><head><title>Calculator</title><head>
                <body>
                    <h1>Error 404</h1>
                    <a href="/">Back to home...</a>
                </body>
            </html>
            `
        );  
        return res.end();
    }
}

module.exports = requestHandler; 




