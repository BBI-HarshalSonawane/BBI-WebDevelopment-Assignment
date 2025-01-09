const { DataTypes } = require("sequelize");
const { sequelize } = require("../config/database");

const Comment = sequelize.define("Comment", {
    postId: {
        type: DataTypes.INTEGER,
        references: {
            model: "Post", // Refers to the Post model
            key: "id", // Refers to the Post's primary key
        },
    },
    user: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    body: {
        type: DataTypes.STRING,
        allowNull: false,
    },
});

module.exports = Comment;
