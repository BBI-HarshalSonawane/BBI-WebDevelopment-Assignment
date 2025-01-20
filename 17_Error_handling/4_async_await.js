async function f() {
    let response = await fetch('http://xyzurl');
}
// f() becomes a rejected promise
f().catch(alert);


// he error handling is done by the .catch clause. 
// Async-await can also be wrapped in a try-catch block for error handling


// ❌ the url is wrong 
// TypeError: failed to fetch 




