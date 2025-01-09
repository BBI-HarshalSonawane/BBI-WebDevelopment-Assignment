

const sumResultHandler = (req, res) => {
    
    const url = req.url;
    const method = req.method;

    if (url === '/result' && method==='POST') {
        const body = [];

        req.on('data', (chunk) => {    // when we will get an "data" then an only then u need to run, becz it is "callback" funct
            console.log(chunk);
            body.push(chunk);
        });

        req.on('end', () => { // end means when the 'data' 👆 getting request is done

            const parsedBody = Buffer.concat(body).toString(); // "buffer" 👈 👈 use to concatenate all the chunks together
            const bodyParams = new URLSearchParams(parsedBody);
            const first = bodyParams.get('first');
            const second = bodyParams.get('second');
            const Answer = Number(first) + Number(second);

            console.log('Answer', Answer);
            res.setHeader('Content-Type', 'text/html');
            res.write(`
                <html><head><title>Calculator</title><head>
                    <body>
                        <h3>Thanks for Ur response !!!</h3>
<<<<<<< HEAD
                        <h1>Ur Result ${Answer}</h1> 
=======
<<<<<<< HEAD
                        <h1>Your Result ${Answer}</h1> 
=======
                        <h1>Ur Result ${Answer}</h1> 
>>>>>>> c8cb708af2f906cdde71d748bffd989d1e785bb6
>>>>>>> d8e5fc2fb6ea823ae80a7e5e56b144d43ea3f9e6
                    </body>
                </html>
            `);

            return res.end();   // means here we completed our overall workflow and stop the code.
        });


    }
    
   
}

module.exports = sumResultHandler;



