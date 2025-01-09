const express = require('express');
const app = express();

// ------------------------------------------------------   
// this 3 lines are very IMP because when we accept data from "form" that we create below 👇👇 we will 
// we need to to show it on page, then we will access it by 👉👉 "req.body" 👈👈 for that we need this 3 line
// ❌ without it, the code will not work properly.👇👇👇👇👇👇👇👇👇👇

const bodyParser = require('body-parser');  // ✅
app.use(bodyParser.json()); // ✅
app.use(bodyParser.urlencoded({ extended: true })); // ✅

// ------------------------------------------------------

app.use((req, res, next)=>{ // if we haven't given "/" still it redirect to "/" route
    console.log("1st dummy middleware ", req.url, req.method);
    next();
});
app.use((req, res, next)=>{
    console.log("2nd dummy middleware ", req.url, req.method);
    next();
});

// 👇👇👇👇👇 why we comment it becz of "res.send()" once run it will stop over all project means it is end of project. Everything is complete it is.

// app.use((req, res, next)=>{         
//     console.log("3rd dummy middleware ", req.url, req.method);
//     res.send('<h1>Response from 3rd middleware!!!</h1>');
// });

// ------------------------------------------------------

app.get('/', (req, res, next) => {
    console.log('This always runs!');
    res.redirect("/contact_us");
});

app.get('/contact_us', (req, res, next) => {    // this "get" req on same route "/contact_us" for returning "data" from ✅"form"
    console.log('In contact us middleware!',req.url, req.method), req.body;
    res.send(`
        <html><head><title>Calculator</title><head>
            <body>
                <form action="/contact_us" method="POST">
                    <input type="text" name="userName" placeholder="User Name"> 
                    <input type="email" name="userEmail" placeholder="email">
                    <button type="submit">Sum</button>
                </form>
            </body>
        </html>    
    `);
});


app.post('/contact_us', (req, res,next) => {    // this "Post" req on same route "/contact_us" for getting data from ✅"form"
    console.log('Inside Post' )
    const { userName, userEmail } = req.body; // work only becz of 👉 "urlencoded" we define above. 3 lines
    res.send(`
        <h1>Thanks for ur Response !! </h1>
        <h2>Ur Name: ${userName} and Ur Email: ${userEmail}</h2>
    `);
});



//--------------------------------------------

const PORT =  3000;

app.listen(PORT, ()=>{  // here we start server directly with "app" that we done earlier in node 👉👉 http.createServer(app);
    console.log(`server running on http://localhost:${PORT}`);
})
