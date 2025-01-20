const http = require('http');
const fs = require('fs');

const server = http.createServer((req, res) => {

  console.log('Server started....');

  const url = req.url;
  const method = req.method;
  if (url === '/') {
    res.write('<html>');
    res.write('<head><title>Enter Message</title><head>');
    res.write('<body><form action="/message" method="POST"><input type="text" name="message"><button type="submit">Send</button></form></body>');
    res.write('</html>');
    return res.end();
  }
  if (url === '/message' && method === 'POST') {

  // ------------------------------------

    const body = [];

    req.on('data', (chunk) => {   // here "data" 👈👈  means the data that is coming in the request
      // instead of data we can use "readable" 👈 👈 also
      // instead of using "body-parser" we using this method to parse the body of the request 👉👉👉 saw the file "simple_route.js" ✅ in 7th folder we use "body-parser" over there

      console.log(chunk);
      body.push(chunk);

    });

    req.on('end', () => { // end means when the request is done

      const parsedBody = Buffer.concat(body).toString(); // "buffer" 👈 👈 use to concatenate all the chunks together
      let message = parsedBody.split('=')[1]; // split the parsedBody by "=" get 1st position element of the array
      message = message.replace(/\+/g, ' '); // replace "+" with " "
      fs.writeFileSync('message.txt', message); // ✅ writeFileSync

    });

    res.statusCode = 302;
    res.setHeader('Location', '/');
    return res.end();

  }

// ------------------------------------

  res.setHeader('Content-Type', 'text/html');
  res.write('<html>');
  res.write('<head><title>My First Page</title><head>');
  res.write('<body><h1>Hello from my Node.js Server!</h1></body>');
  res.write('</html>');
  res.end();
  
});

const port = 3000;
server.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});
