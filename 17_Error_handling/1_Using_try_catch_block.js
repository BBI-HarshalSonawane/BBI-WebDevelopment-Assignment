function dosomething() {
    throw new Error('a error is thrown from dosomething');
}

function init() {
    try {
        dosomething();
    }
    catch (e) {
        console.log(e);
    }
    console.log( "After successful error handling");
}

init();

// if we run above file by change directory to that file we will get msg as
// "Error" ❌ : a error is thrown from "dosomething"

// And we successfully handle the error --> "After successful error handling"SS
