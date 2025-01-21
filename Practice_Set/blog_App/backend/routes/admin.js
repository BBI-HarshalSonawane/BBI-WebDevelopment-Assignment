const express = require('express');
const path = require('path');
const {isAuthenticated} = require("../midleware/isAuth");
const {authorizeRole, createBlog, editBlog, deleteBlog} = require("../controllers/userController");
const {getAllUsers, deleteUser, deleteBlog} = require("../controllers/adminController");
const {getAllBlogs, getBlogById} = require("../controllers/viewerController");

const myRouter = express.Router();

// path module instead of "__dirname"
const rootDir = require("../utils/pathUtils"); // ✅


myRouter.get('/', (req, res, next) => {

  res.render('landingPage'); // ✅ Here is "home.ejs" we render for ejs
});

myRouter.get('/home', isAuthenticated, (req, res, next) => {
  res.render("home"); // Render home.ejs
});

myRouter.get('/add-product', (req, res, next) => { 
  res.render('form');  // Assumes "views/form.ejs" exists
});

myRouter.get('/forgotpassword', (req, res, next) => { 
  res.render('forgotPwd');  // Assumes "views/form.ejs" exists
});


// Admin routes
// myRouter.get("/admin/users", isAuthenticated , authorizeRole(["admin"]), getAllUsers);
// myRouter.delete("/admin/user/:userId", isAuthenticated , authorizeRole(["admin"]), deleteUser);
// myRouter.delete("/admin/blog/:blogId", isAuthenticated , authorizeRole(["admin"]), deleteBlog);

myRouter.get("/admin/users", isAuthenticated, authorizeRole(["admin"]), getAllUsers);
myRouter.delete("/admin/user/:userId", isAuthenticated, authorizeRole(["admin"]), deleteUser);
myRouter.delete("/admin/blog/:blogId", isAuthenticated, authorizeRole(["admin"]), deleteBlog);


// User routes
myRouter.post("/user/blog", isAuthenticated , authorizeRole(["user"]), createBlog);
myRouter.put("/user/blog/:blogId", isAuthenticated , authorizeRole(["user"]), editBlog);
myRouter.delete("/user/blog/:blogId", isAuthenticated , authorizeRole(["user"]), deleteBlog);

// Viewer routes
myRouter.get("/viewer/blogs", getAllBlogs);
myRouter.get("/viewer/blog/:blogId", getBlogById);


myRouter.use((req, res, next) => {
  res.status(404).sendFile(path.join(rootDir, 'views' ,'404_page.html')); // Serve 404 page
});

// -----------------------------------------

module.exports = myRouter;
