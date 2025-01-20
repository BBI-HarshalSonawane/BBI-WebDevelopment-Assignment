

const homePageHandler = (req, res) => {
    
    const url = req.url.toLowerCase();

    if (url === '/') {
        res.setHeader('Content-Type', 'text/html');
        res.write(`
            <html><head><title>Calculator</title><head>
            <body>
                <h1>Welcome to our Calculation world !!!</h1>
                <a href="/calculation">Please click me for Calculation</a>
            </body>
            </html>
        `
        );  
    }
    else{
        res.setHeader('Content-Type', 'text/html');
        res.write(
            `<html><body><h1>Error 404</h1></body></html>`
        )
       return res.end();
    }
}

module.exports = homePageHandler; 

