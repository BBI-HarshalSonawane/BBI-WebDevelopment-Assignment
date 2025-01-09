const { Sequelize } = require("sequelize");
require("dotenv").config();

// Initialize Sequelize with SQLite
const sequelize = new Sequelize({
    dialect: "sqlite",
    storage: "./database.sqlite", // SQLite database file location
    logging: false, // Disable logging for cleaner output
});

// Function to connect to the database
const connectWithDb = async () => {
    try {
        await sequelize.authenticate();
        console.log("Database connected successfully.");
    } catch (error) {
        console.error("Database connection failed:", error.message);
        process.exit(1); // Exit the process if database connection fails
    }
};

module.exports = { sequelize, connectWithDb };
