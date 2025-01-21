// Middleware to Check If User Is Logged In
exports.isAuthenticated = (req, res, next) => {
    
    if (!req.session.user) {
        //return res.status(401).json({ message: "Unauthorized. Please log in." });
        return res.redirect("/admin")
    }
    next();
};