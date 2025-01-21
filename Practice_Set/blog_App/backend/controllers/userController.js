const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const User = require("../models/userModel");
const Blog = require("../models/blogModel");


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

        // Save user details in session
        // req.session.user = {
        //     id: user.id,
        //     firstName: user.firstName,
        //     lastName: user.lastName,
        //     email: user.email,
        //     role: user.role,
        // };

        req.session.user = {
            id: user.id,
            role: user.role,
        };

        res.status(200).json({ message: "Signin successful", user: req.session.user });
    } catch (error) {
        res.status(500).json({ error: error.message });
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
// exports.authorizeRole = (roles) => {
//     return (req, res, next) => {
//         const { user } = req.session;
//         if (!user || !roles.includes(user.role)) {
//             return res.status(403).json({ message: "Forbidden. You do not have the required role." });
//         }
//         next();
//     };
// };

exports.authorizeRole = (roles) => (req, res, next) => {
    const { role } = req.session.user || {};
    if (!roles.includes(role)) {
        return res.status(403).json({ message: "Forbidden. You do not have the required role." });
    }
    next();
};



//------------
// Logout Functionality

exports.logoutUser = (req, res) => {
    req.session.destroy((err) => {
        if (err) {
            return res.status(500).json({ message: "Failed to log out" });
        }
        res.clearCookie('connect.sid'); // Clears the session cookie
        //res.status(200).json({ message: "Logout successful" });
        res.redirect("/admin");
    });
};

// ----------------------------------

// Create a blog
exports.createBlog = async (req, res) => {
    try {
        const { title, content } = req.body;
        const { id } = req.session.user;

        const blog = await Blog.create({ title, content, userId: id });
        res.status(201).json(blog);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// Edit own blog
exports.editBlog = async (req, res) => {
    try {
        const { blogId } = req.params;
        const { title, content } = req.body;
        const { id } = req.session.user;

        const blog = await Blog.findOne({ where: { id: blogId, userId: id } });
        if (!blog) {
            return res.status(403).json({ message: "Unauthorized to edit this blog" });
        }

        blog.title = title;
        blog.content = content;
        await blog.save();

        res.status(200).json(blog);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// Delete own blog
exports. deleteBlog = async (req, res) => {
    try {
        const { blogId } = req.params;
        const { id } = req.session.user;

        const blog = await Blog.findOne({ where: { id: blogId, userId: id } });
        if (!blog) {
            return res.status(403).json({ message: "Unauthorized to delete this blog" });
        }

        await blog.destroy();
        res.status(200).json({ message: "Blog deleted successfully" });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};









