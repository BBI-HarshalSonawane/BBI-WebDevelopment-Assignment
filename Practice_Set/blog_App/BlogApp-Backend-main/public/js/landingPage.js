document.addEventListener("DOMContentLoaded", () => {
    const signUpForm = document.querySelector(".sign-up-htm");
    const signInForm = document.querySelector(".sign-in-htm");

    // Handle Sign Up Form
    document.querySelector(".sign-up-htm .button").addEventListener("click", async (e) => {
        e.preventDefault();
        const firstName = document.getElementById("firstName").value;
        const lastName = document.getElementById("lastName").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("pass1").value;
        const repeatPassword = document.getElementById("repeatPass").value;
        const role = document.getElementById("role").value;

        console.log("in sigup before");

        if (password !== repeatPassword) {
            return alert("Passwords do not match");
        }

        try {
            const response = await fetch("/signup", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ firstName, lastName, email, password, role }),
            });

            const data = await response.json();
            if (data.message === "User created successfully") {
                alert("User signed up successfully!");
            } else {
                alert(data.message);
            }
            console.log("in sigup after");

        } catch (error) {
            console.error("Error signing up:", error);
        }
    });

    // Handle Sign In Form
    document.querySelector(".sign-in-htm .button").addEventListener("click", async (e) => {
        e.preventDefault();
        const email = document.getElementById("email").value;
        const password = document.getElementById("pass2").value;

        try {
            const response = await fetch("/signin", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ email, password }),
            });

            const data = await response.json();
            if (data.message === "Signin successful") {
                localStorage.setItem("token", data.token);
                alert("Signin successful!");
            } else {
                alert(data.message);
            }
        } catch (error) {
            console.error("Error signing in:", error);
        }
    });
});
