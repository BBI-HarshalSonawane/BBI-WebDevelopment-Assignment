const Blog = require("../models/blogModel");

// Get all published blogs
exports.getAllBlogs = async (req, res) => {
    try {
        const blogs = await Blog.findAll({
            where: { status: "published" },
            include: [{ model: require("../models/userModel"), attributes: ["firstName", "lastName"] }],
        });
        res.status(200).json(blogs);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

// View a single published blog
exports.getBlogById = async (req, res) => {
    try {
        const { blogId } = req.params;

        const blog = await Blog.findOne({
            where: { id: blogId, status: "published" },
            include: [{ model: require("../models/userModel"), attributes: ["firstName", "lastName"] }],
        });

        if (!blog) {
            return res.status(404).json({ message: "Blog not found" });
        }

        res.status(200).json(blog);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
