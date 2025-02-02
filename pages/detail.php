<?php
// static dulss
$post = [
    'id' => 1,
    'content' => 'Jiji bos',
    'author' => 'Author 1',
    'date' => '2025-01-01 12:00:00',
    'image_url' => 'https://i.pinimg.com/236x/70/51/16/70511629af7f37b7637ac0390dbb3207.jpg',
    'pfp_url' => 'https://tr.rbxcdn.com/180DAY-a33f65cf6a7233cad8f393ec0350e538/420/420/Hat/Webp/noFilter'
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
            <?php include '../partials/detail-feed.php'; ?>
        </main>
    </div>
    <script>
     
    const urlParams = new URLSearchParams(window.location.search);
    const postid = urlParams.get('postid');

    

    </script>
</body>
</html>
