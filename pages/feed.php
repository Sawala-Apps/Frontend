<?php
// Static data to simulate posts with image URLs
$posts = [
    [
        'id' => 1,
        'title' => 'First Post Title',
        'content' => 'This is the content of the first post.',
        'author' => 'Author 1',
        'date' => '2025-01-01 12:00:00',
        'image_url' => 'https://wallpapers.com/images/hd/roblox-funny-meme-pfp-e57fv17b4lafjfi8.jpg',
        'pfp_url' => 'https://tr.rbxcdn.com/180DAY-a33f65cf6a7233cad8f393ec0350e538/420/420/Hat/Webp/noFilter'
    ],
    [
        'id' => 2,
        'title' => 'Second Post Title',
        'content' => 'This is the content of the second post.',
        'author' => 'Author 2',
        'date' => '2025-01-02 13:00:00',
        'image_url' => 'https://i.pinimg.com/550x/04/55/cb/0455cbf7f25880594f3ab2362f92c76c.jpg',
        'pfp_url' => 'https://cdn.pfps.gg/pfps/2763-cat-face-meme.png'
    ],
    [
        'id' => 3,
        'title' => 'Third Post Title',
        'content' => 'This is the content of the third post.',
        'author' => 'Author 3',
        'date' => '2025-01-03 14:00:00',
        'image_url' => 'https://i.redd.it/fglg5diryyf21.jpg',
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
</head>
<body class="bg-stone-600 font-sans">

    <!-- Header -->
    <?php include '../includes/header.php'; ?>

    <!-- Feed Container -->
    <main class="container mx-auto px-4 py-6 max-w-2xl">
        <?php
        // Loop through posts and pass each post to the feed card template
        foreach ($posts as $post) {
            include '../partials/feed-card.php';
        }
        ?>
    </main>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>
