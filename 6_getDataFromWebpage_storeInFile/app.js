const http = require('http');
const fs = require('fs');
const path = require('path');

const server = http.createServer((req, res) => {
  const url = req.url;
  const method = req.method;

  res.setHeader('Content-Type', 'text/html');

  if (url === '/') {
    // Serve the form for user input
    res.write('<html>');
    res.write('<head><title>Enter Message</title><head>');
    res.write('<body><form action="/message" method="POST"><input type="text" name="message"><button type="submit">Send</button></form></body>');
    res.write('</html>');
    return res.end();
  }

  if (url === '/message' && method === 'POST') {
    let body = '';

    // Listen to 'data' event to receive form data
    req.on('data', (chunk) => {
      body += chunk;
    });

    req.on('end', () => {
      // Parse the URL-encoded form data
      const message = new URLSearchParams(body).get('message'); // Extract the "message" value
      console.log('URL ', URLSearchParams );

      const filePath = path.resolve('./message.txt');

      // Write the message to the file
      fs.writeFile(filePath, message, 'utf8', (err) => {
        if (err) { 
          res.statusCode = 500;
          res.setHeader('Content-Type', 'text/html');
          res.write('<html><body><h1>Error saving message</h1></body></html>');
          return res.end();
        }

        // Redirect the user to the homepage
        res.statusCode = 302; // 302 code use for redirection
        res.setHeader('Location', '/thankyou.html');
        return res.end();
      });
    });

    return;
  }

  // Default response for other routes
  res.write('<html>');
  res.write('<head><title>My First Page</title><head>');
  res.write('<body><h1>Hello from my Node.js Server!</h1></body>');
  res.write('</html>');
  res.end();
});

// Start the server
server.listen(4000, () => {
  console.log('Server is running at http://localhost:4000/');
});
