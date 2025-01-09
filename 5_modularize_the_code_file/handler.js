const fs = require('fs');

const requestHandler = (req, res) => {
  const url = req.url;
  const method = req.method;
  if (url === '/') {
    res.write('<html>');
    res.write('<head><title>Enter Message</title><head>');
    res.write(
      
      '<body><form action="/message" method="POST"><input type="text" name="message"><button type="submit">Send</button></form></body>'
    
    );
    res.write('</html>');
    return res.end();
  }

  if (url === '/message' && method === 'POST') {
    const body = [];
    req.on('data', (chunk) => {

      console.log(chunk);
      body.push(chunk);

    });
    
    return req.on('end', () => {
      
      const parsedBody = Buffer.concat(body).toString(); // "buffer" 👈 👈 use to concatenate all the chunks together
      let message = parsedBody.split('=')[1]; // split the parsedBody by "=" get 1st position element of the array
      message = message.replace(/\+/g, ' '); // replace "+" with " "
      fs.writeFileSync('message.txt', message);
      
      fs.writeFile('message.txt', message, (err) => {
        res.statusCode = 302;
        res.setHeader('Location', '/');
        return res.end();
      });
      
    });
  }
  else{
    res.setHeader('Content-Type', 'text/html');
    res.write('<html>');
    res.write('<head><title>My First Page</title><head>');
    res.write('<body><h1>Hello from my Node.js Server!</h1></body>');
    res.write('</html>');
    res.end();
  }
};

module.exports = requestHandler;   // 1️⃣ way ✅

// module.exports = {   // 2️⃣ way ✅
//     handler: requestHandler,
//     someText: 'Some hard coded text'
// };

// module.exports.handler = requestHandler; // 3️⃣ way ✅
// module.exports.someText = 'Some text';

// exports.handler = requestHandler; // 4️⃣ way ✅
// exports.someText = 'Some hard coded text';