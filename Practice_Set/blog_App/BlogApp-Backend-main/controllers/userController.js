const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const User = require("../models/userModel");

// Signup
exports.signupUser = async (req, res) => {
    try {
        const { firstName, lastName, email, password, role } = req.body;

        // Check if the email is already registered
        const existingUser = await User.findOne({ where: { email } });
        if (existingUser) {
            return res.status(400).json({ message: "Email already registered" });
        }

        // Hash the password
        const hashedPassword = await bcrypt.hash(password, 10);

        // Create the user
        const newUser = await User.create({
            firstName,
            lastName,
            email,
            password: hashedPassword,
            role // Store the role (user, editor, admin)
        });

        res.status(201).json({ message: "User created successfully", user: newUser });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// Signin
exports.signinUser = async (req, res) => {
    try {
        const { email, password } = req.body;

        // Check if the user exists
        const user = await User.findOne({ where: { email } });
        if (!user) {
            return res.status(400).json({ message: "Invalid email or password" });
        }

        // Compare passwords
        const isMatch = await bcrypt.compare(password, user.password);
        if (!isMatch) {
            return res.status(400).json({ message: "Invalid email or password" });
        }

        // Generate JWT with role (userId and role)
        const token = jwt.sign({ userId: user.id, role: user.role }, "your_jwt_secret", { expiresIn: "1h" });

        res.status(200).json({ message: "Signin successful", token });
    } catch (error) {
        res.status(500).json();
    }
};

// Middleware for authentication
exports.authenticateUser = async (req, res, next) => {
    const token = req.header("Authorization")?.replace("Bearer ", "");

    if (!token) {
        return res.status(401).json({ message: "Access denied. No token provided." });
    }

    try {
        const decoded = jwt.verify(token, "your_jwt_secret");
        req.user = decoded; // Store decoded token in request for further use (role, userId)
        next();
    } catch (error) {
        res.status(400).json({ message: "Invalid or expired token" });
    }
};

// Middleware for authorization (only allow specific roles)
exports.authorizeRole = (roles) => {
    return (req, res, next) => {
        const { role } = req.user;
        if (!roles.includes(role)) {
            return res.status(403).json({ message: "Forbidden. You do not have the required role." });
        }
        next();
    };
};
