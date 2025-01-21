// const { Post, Like, Comment } = require("../models");

const Like = require("../models/likeModel");
const Post = require("../models/postModel");
const Comment = require("../models/commentModel");


exports.createPost = async (req, res) => {
    try {
        const { title, body } = req.body;

        // Create a new post using Sequelize
        const post = await Post.create({
            title,
            body,
        });
        res.redirect("/admin/home");
        
    } catch (error) {
        res.status(400).json({
            success: false,
            error: "Error while creating post",
        });
    }
};


exports.getAllPosts = async (req, res) => {
    try {
        const posts = await Post.findAll();
        console.log(posts);
        res.json({
            posts: posts,
        });
    } catch (error) {
        res.status(400).json({
            error: "Error while fetching data",
        });
    }
};


// exports.getAllPosts = async (req, res) => {
//     try {
//         // Fetch all posts, including associated likes and comments
//         const posts = await Post.findAll({
//             include: [
//                 {
//                     model: Like, // Include associated likes
//                 },
//                 {
//                     model: Comment, // Include associated comments
//                 },
//             ],
//         });

//         res.json({
//             posts: posts,
//         });
//     } catch (error) {
//         res.status(400).json({
//             error: "Error while fetching data",
//         });
//     }
// };
