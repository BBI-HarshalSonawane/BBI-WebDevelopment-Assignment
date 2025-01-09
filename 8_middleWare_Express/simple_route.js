const express = require('express');
const bodyParser = require('body-parser'); // Middleware for parsing request body

// ✅✅✅✅✅✅  Here we all our routes works properly in "postman" 🔯. ✅✅✅✅✅✅

const app = express();

// Middleware to parse JSON and URL-encoded bodies
app.use(bodyParser.json()); // ✅
app.use(bodyParser.urlencoded({ extended: true })); // ✅

// Serve static files (optional, for serving HTML, CSS, JS, etc.)
app.use(express.static('public'));

// GET route for the homepage
app.get('/', (req, res) => {
    res.send('<h1>Welcome to My Web Application!</h1>');
});

// POST route
app.post('/', (req, res) => {
    const { message } = req.body; // Extract message from POST request body
    res.send(`<h1>Received POST Request!</h1><p>Message: ${message || 'No message sent'}</p>`);
});

// PUT route
app.put('/user', (req, res) => {
    const { username, email } = req.body; // Example for PUT data
    res.send(`<h1>Received PUT Request at /user</h1><p>Updated User Info: ${username || 'No username'}, ${email || 'No email'}</p>`);
});

// DELETE route
app.delete('/user', (req, res) => {
    res.send('<h1>Received DELETE Request at /user</h1><p>User deleted successfully.</p>');
});

// Catch-all route for unsupported paths
app.use((req, res) => {
    res.status(404).send('<h1>404 Not Found</h1>');
});

// Start the server
app.listen(3000, () => {
    console.log('Server running at http://localhost:3000/');
});
