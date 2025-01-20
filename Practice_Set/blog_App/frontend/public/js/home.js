async function fetchPosts() {
    try {
        const response = await fetch("http://localhost:4000/api/v1/posts");
        console.log(response);
        if (!response.ok) {
            throw new Error("Failed to fetch posts");
        }

        const data = await response.json();
        const posts = data.posts;

        
        const container = document.querySelector(".container");
        container.innerHTML = ""; 

        
        posts.forEach(post => {
            const card = document.createElement("div");
            card.className = "card";

            card.innerHTML = `
                <div class="card__body">
                    <h4>${post.title}</h4>
                    <p>${post.body}</p>
                </div>
            `;

            container.appendChild(card);
        });
    } catch (error) {
        console.error("Error fetching posts:", error);
    }
}

document.addEventListener("DOMContentLoaded", fetchPosts);