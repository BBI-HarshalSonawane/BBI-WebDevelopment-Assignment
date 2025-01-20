const { DataTypes } = require("sequelize");
const { sequelize } = require("../config/database");
const Like = require("./likeModel");
const Comment = require("./commentModel");

const Post = sequelize.define("Post", {
    title: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    body: {
        type: DataTypes.STRING,
        allowNull: false,
    },
});

// Define the relationships: One Post can have many Likes and Comments
Post.hasMany(Like, {
    foreignKey: "postId", // Foreign key in Like model
});
Like.belongsTo(Post, {
    foreignKey: "postId", // Foreign key in Like model
});

Post.hasMany(Comment, {
    foreignKey: "postId", // Foreign key in Comment model
});
Comment.belongsTo(Post, {
    foreignKey: "postId", // Foreign key in Comment model
});

module.exports = Post;
