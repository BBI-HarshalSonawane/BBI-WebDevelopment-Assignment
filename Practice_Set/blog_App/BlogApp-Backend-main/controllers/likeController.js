// Import models
// const { Like, Post } = require("../models");

const Like = require("../models/likeModel");
const Post = require("../models/postModel");

exports.likePost = async (req, res) => {
    try {
        const { postId, user } = req.body;

        // Create a like using Sequelize
        const like = await Like.create({
            postId,  // The foreign key for the associated Post
            user,
        });

        // Find the post by its ID and associate the like
        const post = await Post.findByPk(postId);
        if (post) {
            await post.addLike(like);  // Use Sequelize's association method to add the like
        }

        // Return the updated post
        res.json({
            post: post,
        });
    } catch (error) {
        res.status(400).json({
            error: "Error while liking post",
        });
    }
};

exports.unlikePost = async (req, res) => {
    try {
        const { postId, likeId } = req.body;

        // Delete the like record from the Like table
        const deletedLike = await Like.findByPk(likeId);
        if (deletedLike) {
            await deletedLike.destroy();  // Destroy the like record
        }

        // Find the post and remove the like association
        const post = await Post.findByPk(postId);
        if (post) {
            await post.removeLike(deletedLike);  // Remove the like from the post
        }

        // Return the deleted like and the updated post
        res.json({
            deletedLike,
            post,
        });
    } catch (error) {
        res.status(400).json({
            error: "Error while unliking post",
        });
    }
};

exports.dummyLink = (req, res) => {
    res.send("This is your Dummy Page");
};
