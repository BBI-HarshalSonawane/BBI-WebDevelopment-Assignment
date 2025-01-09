const http = require('http');
const fs = require('fs');

const server = http.createServer((req, res) => {

  console.log('Server started....');

  const url = req.url;
  const method = req.method;
  if (url === '/') {
    res.write(`
      <html>
        <head><title>Enter Message</title><head>
        <body>
          <form action="/message" method="POST">
            <input type="text" name="message" placeholder="Enter your message">
            <input type="text" name="username" placeholder="Enter your username">
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="Female">Female</label>
            <input type="radio" id="female" name="gender" value="female">
            <button type="submit">Submit</button>
          </form>
        </body>
      </html>
      `);
    return res.end();
  }
  if (url === '/message' && method === 'POST') {

    const body = [];

    req.on('data', (chunk) => {   
      console.log(chunk);
      body.push(chunk);
    });

    req.on('end', () => { // end means when the request is done

      const parsedBody = Buffer.concat(body).toString(); // "buffer" 👈 👈 use to concatenate all the chunks together
      const bodyParams = new URLSearchParams(parsedBody);
      const message = bodyParams.get('message');
      const username = bodyParams.get('username');
      const gender = bodyParams.get('gender');

      const userData = {  // ✅ here we pass data to json.
        message: message,
        username: username,
        gender: gender
      };
      console.log(userData);

      fs.writeFileSync('userData.json', JSON.stringify(userData, null, 2)); // 2 is for indentation and null is for replacer of JSON.stringify instead of null we can use a function like (key, value) => { return value; }

    });

    res.statusCode = 302;
    res.setHeader('Location', '/');
    return res.end();

  }
  else{ 
    res.setHeader('Content-Type', 'text/html');
    res.write('<html>');
    res.write('<head><title>My First Page</title><head>');
    res.write('<body><h1>Hello from my Node.js Server!</h1></body>');
    res.write('</html>');
    res.end();
  }
  
});

const port = 3000;
server.listen(port, ()=>{
    console.log(`server running on http://localhost:${port}`);
});
