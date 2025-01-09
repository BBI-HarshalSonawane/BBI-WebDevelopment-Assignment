const { DataTypes } = require("sequelize");
const { sequelize } = require("../config/database");

const Like = sequelize.define("Like", {
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
});

module.exports = Like;
