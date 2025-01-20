
const calculationHandler = (req, res) => {
    
    const url = req.url.toLowerCase();
    const method = req.method;

    if (url === '/calculation') {
        res.write(`
            <html><head><title>Calculator</title><head>
                <body>
                    <form action="/result" method="POST">
                        <input type="number" name="first" placeholder="first" value="0"> 
                        <input type="number" name="second" placeholder="second" value="0">
                        <button type="submit">Sum</button>
                    </form>
                </body>
            </html>
        `
        );
        res.write('');
        return res.end();
    }
    else{
        res.setHeader('Content-Type', 'text/html');
        res.write(
            `<html><body><h1>Error 404</h1></body></html>`
        )
       return res.end();
    }
}

module.exports = calculationHandler; 

