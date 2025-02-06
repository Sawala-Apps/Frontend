<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-[62%] flex flex-col items-center">
    <main class="container mx-auto flex flex-col items-center">
            <?php include '../includes/header.php'; ?>
            <div id="feed-container" class="w-full space-y-4"></div>
            <div class="w-[80%] max-lg:w-[100%] mx-auto mb-6 p-6 bg-[#E3E8F2] border-brutal shadow-brutal rounded-lg">
                <h4 class="text-xl font-bold mb-4">Comments</h4>
                <div id="comment-container" class="w-full space-y-4"></div>
                
                <form id="chatForm" class="mt-4">
                    <div class="flex flex-row space-x-4 max-sm:flex-col mb-2">
                        <input id="message" name="message" class="w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none resize-none" placeholder="Type your comment..." rows="2" required></input>
                        <button type="submit" class="btn-brutal px-6 py-2 bg-[#88AAEE] text-black font-bold rounded-lg shadow-brutal hover:bg-blue-600 border-brutal max-sm:mt-3">Send</button>
                    </div>
                </form>
            </div>
            <?php include '../includes/footer-feed.php'; ?>
        </main>
    </div>
    <script>
    const token = localStorage.getItem("token");
    if (!token) {
        window.location.href = "login.php"; // Redirect jika tidak ada token
    }
    
    const urlParams = new URLSearchParams(window.location.search);
    const postid = urlParams.get('postid');
    const feedContainer = document.getElementById('feed-container');
    const commentContainer = document.getElementById('comment-container');
    document.getElementById("chatForm").addEventListener("submit", function(event) {
        event.preventDefault();
        const comment = document.getElementById("message").value;

        axios.post("https://backend-production-c986.up.railway.app/feed/" + postid + "/comment",{ content: comment }, 
        {
             headers: {
                "Authorization": `Bearer ${token}`
            }
        })
        .then(function (response) {
            alert("Komentar berhasil ditambahkan!");
            console.log(response.data);
        })
        .catch(function (response) {
            alert("Gagal menambahkan komentar");
            console.error(response.error);
        })

    })

    axios.get("https://backend-production-c986.up.railway.app/feeds/" + postid, {
        headers: {
            "Authorization": `Bearer ${token}`
        }
    })
    .then(function (response) {
        console.log(response.data);
        const post = response.data;
        const detail = createDetail(post);
        feedContainer.appendChild(detail);

        const comments = response.data.comments;
        comments.forEach(comment => {
            const commentElement = createCommentElement(comment);
            commentContainer.appendChild(commentElement);
        })
    })
    .catch(function (error) {
        console.error(error);
    })

    function createCommentElement(comment) {
        const commentContainer = document.createElement('div');
        commentContainer.innerHTML = `
        <div class="comment flex items-start space-x-4 mb-4 bg-[#E3E0F3] rounded-lg p-3 border-brutal shadow-brutal">
        <img src="${comment.profile_picture}" alt="User Avatar" class="w-10 h-10 rounded-md border-brutal shadow-brutal">
            <div class="comment-content flex-1">
                <div class="flex flex-column items-center">
                    <h5 class="font-bold">${comment.fullname}</h5>
                    <p>@${comment.uid}</p>
                    <p class="ml-auto text-sm">${new Date(comment.created_at).toLocaleString()}</p>
                </div>

                <p class="text-gray-800">${comment.content}<p>
            </div>
        </div>
        
        `;
        return commentContainer;
        
    }

    function createDetail(post) {
        const postContainer = document.createElement('div');
        postContainer.innerHTML = `
        <div class="w-[80%] max-lg:w-[100%] mx-auto mb-6 p-6 bg-[#DFE5F2] border-brutal shadow-brutal rounded-lg">

            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="${post.profile_picture}" alt="User Avatar" class="w-10 h-10 rounded-md border-brutal shadow-brutal">
                    <div>
                        <div class="flex flex-row items-center">
                        <h3 class="font-bold text-gray-900">${post.fullname}</h3>
                        <p class="ml-2 text-sm">@${post.uid}</p>
                        </div>
                        <p class="text-sm text-gray-600">${new Date(post.created_at).toLocaleString()}</p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <p class="text-gray-800 text-lg">
                ${post.content_text}
                </p>
            </div>

            <div class="mt-4 flex flex-col items-center">
                <img src="${post.content_image}" alt="Post Image" class="w-[90vh] border-brutal rounded-lg">
                <div class="w-[100%]">
                        <div class="flex flex-row mt-2">
                            <p class="text-gray-800 text-sm">
                            ${post.like_count}
                            likes
                            </p>
                            <p class="ml-10 text-gray-800 text-sm">
                            ${post.comment_count}
                            comments
                            </p>
                        </div>
                        </div>
                <div class="mt-2 flex flex-row w-[100%]">
                    <button class="btn-brutal basis-1/3 btn flex items-center justify-center space-x-2 px-4 py-2 bg-[#88AAEE] text-black font-bold rounded-md shadow-join hover:bg-blue-600 border-brutal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                        </svg>
                    </button>
                    <button class="btn-brutal basis-1/3 btn flex items-center justify-center space-x-2 px-4 py-2 bg-[#88AAEE] text-black font-bold rounded-md shadow-join hover:bg-green-600 border-brutal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                        </svg>
                    </button>
                    <button class="btn-brutal basis-1/3 btn flex items-center justify-center space-x-2 px-4 py-2 bg-[#88AAEE] text-black font-bold rounded-md shadow-join hover:bg-yellow-600 border-brutal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 0 1 0-1.504l6.718-3.12a2.5 2.5 0 0 1-.415-.876z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        `;
        return postContainer;
    }

    </script>
</body>
</html>
