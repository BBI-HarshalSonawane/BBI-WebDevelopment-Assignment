const express = require("express");
require("dotenv").config();
const { sequelize, connectWithDb, syncDatabase } = require("../backend/config/database"); // Import Sequelize connection
const path = require("path");
const app = express();
const session = require('express-session');

//--------------------------------------------

app.use(
    session({
        secret: 'asdwercs', // Replace with a strong secret key
        resave: false, // Prevents session from being saved back to the store if it wasn’t modified
        saveUninitialized: false, // Don’t save uninitialized sessions
        cookie: { maxAge: 60 * 60 * 1000 }, // Session duration: 1 hour
    })
);

//--------------------------------------------

const cors = require('cors');
app.use(cors());

// Path utility for root directory
const rootDir = require("../backend/utils/pathUtils");

//--------------------------------------------

// Set EJS as the view engine
app.set("view engine", "ejs");

// Set views directory for frontend templates
// app.set("views", path.join(rootDir, "frontend", "views"));
app.set('views', path.join(__dirname, '../frontend/views'));

//--------------------------------------------

// Middleware for serving static files (CSS, JS, Images)
// app.use(express.static(path.join(rootDir, "frontend", "public")));
app.use(express.static(path.join(__dirname, '../frontend/public')));

//--------------------------------------------

// Middleware for parsing JSON and URL-encoded data
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

//--------------------------------------------

// Importing the routes
const blogRoutes = require("./routes/blog");
const adminRoutes = require("./routes/admin");
const editorRoutes = require("./routes/editor");

// API routes
app.use("/api/v1", blogRoutes); // Example: http://localhost:PORT/api/v1/route
app.use("/admin", adminRoutes);
app.use("/editor", editorRoutes);

//--------------------------------------------

// Route for rendering frontend pages (e.g., landing page)
app.get("/", (req, res) => {
  res.render("landingPage"); // Ensure this file exists in "frontend/views/landingPage.ejs"
});

//--------------------------------------------

// Handle 404 errors for unknown routes
app.use((req, res, next) => {
  res.status(404).sendFile(path.join(rootDir, "frontend", "views", "404_page.html"));
});

//--------------------------------------------

// Start the server after ensuring the database is connected and synced
const PORT = process.env.PORT || 4000;

const startServer = async () => {
  try {
    // Connect to the database
    await connectWithDb();
    await syncDatabase();

    console.log("All models were synchronized successfully.");

    // Start the server
    app.listen(PORT, () => {
      console.log(`Server running at: http://localhost:${PORT}`);
    });
  } catch (error) {
    console.error("Failed to start the server:", error.message);
  }
};

// Initialize the server
startServer();
