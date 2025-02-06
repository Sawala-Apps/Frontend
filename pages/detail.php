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
                            <p class="ml-10 text-gray-800 text-sm">
                            ${post.comment_count}
                            comments
                            </p>
                        </div>
                </div>
            </div>
        </div>
        
        `;
        return postContainer;
    }

    </script>
</body>
</html>
