<?php
// static dulss
$post = [
    'postId' => 'post1',
    'uid' => 'user1',
    'content_text' => 'Hello, this is my first post!',
    'content_image' => 'https://i.ytimg.com/vi/rvX8cS-v2XM/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCF0zNNCUpNmTYhJxWG7VWjmvmybA',
    'created_at' => '2025-02-02 10:30:00',
    'fullname' => 'tes',
    'profile_picture' => 'https://i.redd.it/i-keep-seeing-this-angry-cat-meme-does-anyone-know-what-v0-0o96ygkg9jw91.jpg?width=1080&format=pjpg&auto=webp&s=8a7220f58ae5e5ecbef518367d48b96f7327e06d',
    'like_count' => 12,
    'view_count' => 250,
    'comment_count' => 5,
    'is_liked' => 1
];
?>

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
            <?php include '../partials/detail-feed.php'; ?>
        </main>
    </div>
    <script>
    const token = localStorage.getItem("token");
    const urlParams = new URLSearchParams(window.location.search);
    const postid = urlParams.get('postid');

    axios.get("https://backend-production-c986.up.railway.app/feeds/" + postid, {
        headers: {
            "Authorization": `Bearer ${token}`
        }
    })
    .then(function (response) {
        console.log(response.data);
    })
    .catch(function (error) {
        console.error(error);
    })


    </script>
</body>
</html>
