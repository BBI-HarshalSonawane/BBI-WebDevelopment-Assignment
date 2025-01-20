const path = require('path');

const express = require('express');

const router = express.Router();

router.get('/', (req, res, next) => {
  res.sendFile(path.join(__dirname, '../', 'views', 'shop.html')); // __dirname means our current directory i.e "routes" 👈👈 and "../" means 2 folder out from current directory and go to "views" folder.
});

module.exports = router;
