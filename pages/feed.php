<?php
// static dulss
$posts = [
    [
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
    ],
    [
        'postId' => 'post2',
        'uid' => 'user2',
        'content_text' => 'tes',
        'content_image' => 'tes',
        'created_at' => '2025-02-01 15:45:00',
        'fullname' => 'tes',
        'profile_picture' => 'https://cdn.pfps.gg/pfps/2763-cat-face-meme.png',
        'like_count' => 30,
        'view_count' => 400,
        'comment_count' => 10,
        'is_liked' => 0
    ],
    [
        'postId' => 'post3',
        'uid' => 'user3',
        'content_text' => 'tes',
        'content_image' => 'https://via.placeholder.com/300',
        'created_at' => '2025-01-30 08:15:00',
        'fullname' => 'testes',
        'profile_picture' => 'https://i.pinimg.com/736x/de/a1/b2/dea1b26ed44c0a717205aa117d0bf44f.jpg',
        'like_count' => 8,
        'view_count' => 150,
        'comment_count' => 2,
        'is_liked' => 1
    ]
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
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-[62%] flex flex-col items-center">
    <main class="container mx-auto flex flex-col items-center">
    <?php include '../includes/header.php'; ?>
        <?php
        include '../partials/create-feed.php';
        foreach ($posts as $post) {
            include '../partials/feed-card.php';
        }
        ?>
    </main>
    </div>
    <script>
    </script>
</body>
</html>
