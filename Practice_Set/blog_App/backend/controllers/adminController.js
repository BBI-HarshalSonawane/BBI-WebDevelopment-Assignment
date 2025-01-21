const Blog = require("../models/blogModel");
const User = require("../models/userModel");

// Get all users
exports.getAllUsers = async (req, res) => {
    try {
        const users = await User.findAll();
        res.status(200).json(users);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// Delete a user
exports.deleteUser = async (req, res) => {
    try {
        const { userId } = req.params;
        await User.destroy({ where: { id: userId } });
        res.status(200).json({ message: "User deleted successfully" });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// Delete a blog
exports.deleteBlog = async (req, res) => {
    try {
        const { blogId } = req.params;
        const blog = await Blog.findOne({ where: { id: blogId } });

        if (!blog) {
            return res.status(404).json({ message: "Blog not found" });
        }

        await blog.destroy();
        res.status(200).json({ message: "Blog deleted successfully" });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
