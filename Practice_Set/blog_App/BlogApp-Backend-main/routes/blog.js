const express = require("express");
const router = express.Router();

//import controller
const {createComment} = require("../controllers/CommentController");
const {createPost, getAllPosts} = require("../controllers/postController");
const {likePost, unlikePost, dummyLink} = require("../controllers/likeController");
const { signupUser, signinUser } = require("../controllers/userController");
const forgotPasswordController = require("../controllers/forgotPwdController");

//create mapping between routes and controllers
router.get("/dummyroute", dummyLink);
router.post("/comments/create", createComment); 
router.post("/posts/create", createPost);
router.get("/posts", getAllPosts);
router.post("/likes/like", likePost); 
router.post("/likes/unlike", unlikePost); 

router.post("/signup", signupUser);
router.post("/signin", signinUser);

router.post("/forgot-password/send-otp", forgotPasswordController.sendOtp);
router.post("/forgot-password/verify-otp", forgotPasswordController.verifyOtp);
router.post("/forgot-password/reset-password", forgotPasswordController.resetPassword);

module.exports = router; 