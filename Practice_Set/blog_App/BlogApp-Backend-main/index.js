const express = require("express");
require("dotenv").config();
const { sequelize, connectWithDb } = require("./config/database"); // Import Sequelize connection

const path = require('path');
const app = express();

// path module instead of "__dirname"
const rootDir = require("./utils/pathUtils");

//--------------------------------------------

// Set EJS as the view engine   👇👇👇👇
app.set('view engine', 'ejs');

// view static file located
app.set('views', path.join(rootDir, 'views'));

//--------------------------------------------

// 👇👇👇👇 this middleware is for css files linking statically

// app.use(express.static(path.join(__dirname, 'views')));    // ✅✅ not req becz of css file we place in "public" folder
app.use(express.static(path.join(rootDir, 'public')));     // ✅✅ to render static folder for "css" 👉👉 "rootDir" use instead of __dirname absolute path we place in "utils" folder

//--------------------------------------------

app.use(express.json());
app.use(express.urlencoded({ extended: true }));    // ✅✅ line use for body-parser in express getting user data by req --> "req.body", Here ✅ "true" means allow "string" and "array" along with other datatype, and if ❌ "false" then only allow "string" and "array"


const PORT = process.env.PORT || 3000;

// Importing the routes
const blogRoutes = require("./routes/blog");
const homeRoutes = require('./routes/home');

// Default route
app.use("/api/v1", blogRoutes);     //that's why we need to use (app.use("/api/v1") 👉👉 http://localhost:4000/api/v1/dummyroute
app.use("/home",homeRoutes);

//--------------------------------------------------------------------

app.use((req, res, next) => {  // this middleware is work for every request by default, but becz of we use it at the end, then all unknown route after the "/" this middleware work
    res.status(404).sendFile(path.join(rootDir,'views' ,'404_page.html'));
})

//--------------------------------------------------------------------

// Start the server after ensuring the database is connected and synced
const startServer = async () => {
    try {
        // Connect to the database
        await connectWithDb();

        // Sync all models
        // await sequelize.sync({ alter: true }); // Use `alter: true` for development to update the schema automatically
        console.log("All models were synchronized successfully.");

        // Start the server
        app.listen(PORT, () => {
            console.log(`Server running on : http://localhost:${PORT}`);
        });
    } catch (error) {
        console.error("Failed to start the server:", error.message);
    }
};

// Initialize the server
startServer();
