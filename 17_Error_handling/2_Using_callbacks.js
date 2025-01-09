

const fs = require("fs");

fs.readFile('foo.txt', function (err, data) {
    if (err) {
        console.error(err);
    }
    else {
        console.log(data.toString());
    }
});

console.log("Program Ended");


// here the file 👉 "foo.txt" does not exist in the system hence the "error" ❌ is thrown.




