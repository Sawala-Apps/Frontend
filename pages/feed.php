<?php
// static dulss
$posts = [
    [
        'id' => 1,
        'content' => 'Jiji bos',
        'author' => 'Author 1',
        'date' => '2025-01-01 12:00:00',
        'image_url' => 'https://i.pinimg.com/236x/70/51/16/70511629af7f37b7637ac0390dbb3207.jpg',
        'pfp_url' => 'https://tr.rbxcdn.com/180DAY-a33f65cf6a7233cad8f393ec0350e538/420/420/Hat/Webp/noFilter'
    ],
    [
        'id' => 2,
        'content' => 'Dua bos',
        'author' => 'Author 2',
        'date' => '2025-01-02 13:00:00',
        'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFnczTa-dENlJBTIziOKgOPG3BEB69cyVxFg&s',
        'pfp_url' => 'https://cdn.pfps.gg/pfps/2763-cat-face-meme.png'
    ],
    [
        'id' => 3,
        'content' => 'Tiga bos',
        'author' => 'Author 3',
        'date' => '2025-01-03 14:00:00',
        'image_url' => 'https://www.catster.com/wp-content/uploads/2023/11/Beluga-Cat-e1714190563227.webp',
        'pfp_url' => 'https://i.pinimg.com/736x/de/a1/b2/dea1b26ed44c0a717205aa117d0bf44f.jpg'
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-[120vh] flex flex-col items-center">
    <?php include '../includes/header.php'; ?>
    <main class="container mx-auto">
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
