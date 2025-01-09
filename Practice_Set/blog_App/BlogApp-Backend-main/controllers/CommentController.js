// Import the models
const { Comment } = require("../models/commentModel")
const { Post } = require("../models/commentModel")

// Create a comment
exports.createComment = async (req, res) => {
    try {
        // Fetch data from request body
        const { postId, user, body } = req.body;

        // Create a new comment using Sequelize
        const newComment = await Comment.create({
            postId, // This is the foreign key in Comment table
            user,
            body,
        });

        // Find the post by its ID and associate the new comment
        const updatedPost = await Post.findByPk(postId); // Find the post by primary key
        if (updatedPost) {
            await updatedPost.addComment(newComment); // Use Sequelize association method to add the comment
        }

        // Respond with the updated post details
        res.json({
            post: updatedPost,
        });
        
    } catch (error) {
        res.status(500).json({
            error: "Error while creating comment",
        });
    }
};
