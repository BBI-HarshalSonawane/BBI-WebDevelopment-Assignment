// const bcrypt = require("bcrypt");
// const jwt = require("jsonwebtoken");
// const crypto = require("crypto");
// const User = require("../models/userModel");
// const nodemailer = require("nodemailer");

// // Transporter for sending emails
// const transporter = nodemailer.createTransport({
//     service: "Gmail",
//     secure: true,
//     port : 465,
//     auth: {
//         user: "webspirits007@gmail.com", // Replace with your email
//         pass: "kaevmyfufgernyfn", // Replace with your email password
//     },
// });

// // 1. Route: /forgot-password/send-otp
// exports.sendOtp = async (req, res) => {
//     try {
//         const { email } = req.body;

//         // Check if the user exists
//         const user = await User.findOne({ where: { email } });
//         if (!user) {
//             return res.status(404).json({ message: "User not found" });
//         }

//         // Generate a random OTP
//         const otp = crypto.randomInt(100000, 999999);
//         user.resetOtp = otp;
//         user.resetOtpExpires = Date.now() + 15 * 60 * 1000; // OTP valid for 15 minutes
//         await user.save();

//         // Send OTP via email
//         await transporter.sendMail({
//             to: email,
//             subject: "Password Reset OTP",
//             text: `Your OTP for password reset is ${otp}`,
//         });

//         res.status(200).json({ message: "OTP sent to email" });
//     } catch (error) {
//         res.status(500).json({ error: error.message });
//     }
// };

// // 2. Route: /forgot-password/verify-otp
// exports.verifyOtp = async (req, res) => {
//     try {
//         const { email, otp } = req.body;

//         // Check if the user exists
//         const user = await User.findOne({ where: { email } });
//         if (!user || user.resetOtp !== parseInt(otp, 10) || user.resetOtpExpires < Date.now()) {
//             return res.status(400).json({ message: "Invalid or expired OTP" });
//         }

//         // OTP is verified
//         user.resetOtp = null; // Clear OTP after verification
//         user.resetOtpExpires = null;
//         await user.save();

//         res.status(200).json({ message: "OTP verified successfully" });
//     } catch (error) {
//         res.status(500).json({ error: error.message });
//     }
// };

// // 3. Route: /forgot-password/reset-password
// exports.resetPassword = async (req, res) => {
//     try {
//         const { email, newPassword } = req.body;

//         // Check if the user exists
//         const user = await User.findOne({ where: { email } });
//         if (!user) {
//             return res.status(404).json({ message: "User not found" });
//         }

//         // Hash the new password
//         const hashedPassword = await bcrypt.hash(newPassword, 10);
//         user.password = hashedPassword;
//         await user.save();

//         res.status(200).json({ message: "Password reset successfully" });
//     } catch (error) {
//         res.status(500).json({ error: error.message });
//     }
// };


const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const crypto = require("crypto");
const User = require("../models/userModel");
const nodemailer = require("nodemailer");

// Transporter for sending emails
const transporter = nodemailer.createTransport({
    service: "Gmail",
    secure: true,
    port: 465,
    auth: {
        user: "webspirits007@gmail.com", // Replace with your email
        pass: "kaevmyfufgernyfn", // Replace with your email password
    },
});

// 1. Route: /forgot-password/send-otp
exports.sendOtp = async (req, res) => {
    try {
        const { email } = req.body;

        // Check if the user exists
        const user = await User.findOne({ where: { email } });
        if (!user) {
            return res.status(404).json({ success: false, message: "User not found" });
        }

        // Generate a random OTP
        const otp = crypto.randomInt(100000, 999999);
        user.resetOtp = otp;
        user.resetOtpExpires = Date.now() + 15 * 60 * 1000; // OTP valid for 15 minutes
        await user.save();

        // Send OTP via email
        await transporter.sendMail({
            to: email,
            subject: "Password Reset OTP",
            text: `Your OTP for password reset is ${otp}`,
        });

        res.status(200).json({ success: true, message: "OTP sent to email" });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

// 2. Route: /forgot-password/verify-otp
exports.verifyOtp = async (req, res) => {
    try {
        const { email, otp } = req.body;

        // Check if the user exists
        const user = await User.findOne({ where: { email } });
        if (!user || user.resetOtp !== parseInt(otp, 10) || user.resetOtpExpires < Date.now()) {
            return res.status(400).json({ success: false, message: "Invalid or expired OTP" });
        }

        // OTP is verified
        user.resetOtp = null; // Clear OTP after verification
        user.resetOtpExpires = null;
        await user.save();

        res.status(200).json({ success: true, message: "OTP verified successfully" });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};

// 3. Route: /forgot-password/reset-password
exports.resetPassword = async (req, res) => {
    try {
        const { email, newPassword } = req.body;

        // Check if the user exists
        const user = await User.findOne({ where: { email } });
        if (!user) {
            return res.status(404).json({ success: false, message: "User not found" });
        }

        // Hash the new password
        const hashedPassword = await bcrypt.hash(newPassword, 10);
        user.password = hashedPassword;
        await user.save();

        res.status(200).json({ success: true, message: "Password reset successfully" });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
};