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
            <div class="flex flex-col space-y-4 w-[80%] max-lg:w-[100%] border-brutal shadow-brutal rounded-lg p-4 bg-[#DFE5F2]">
                <div class="flex items-center space-x-6 mb-8">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-brutal shadow-brutal">
                        <img src="https://media.tenor.com/VGVjPI0mDS4AAAAe/hanni.png" alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-gray-800 text-2xl font-bold">Username</span>
                        <button class="mt-2 px-4 py-2 bg-blue-500 text-white font-bold rounded-lg shadow-brutal hover:bg-blue-600 border-brutal">
                            Edit Profile
                        </button>
                    </div>
                </div>

                <!-- jang gambar bos -->
                <div class="grid grid-cols-3 gap-4 p-4">
                    <div class="relative group">
                        <div class="w-full h-32 overflow-hidden rounded-lg border-brutal">
                            <img src="https://stickercommunity.com/uploads/main/25-08-2023-09-24-59b9adi-sticker6.webp" alt="Post Image" class="w-full h-full object-cover hover:cursor-pointer">
                        </div>
                        <a href="/post-detail/1" class="absolute inset-0"></a>
                    </div>
                    <div class="relative group">
                        <div class="w-full h-32 overflow-hidden rounded-lg border-brutal">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv1cq2y70vyI2xVR29IjVThcT4qRxQoVixmw&s" alt="Post Image" class="w-full h-full object-cover">
                        </div>
                        <a href="/post-detail/1" class="absolute inset-0"></a>
                    </div>
                    <div class="relative group">
                        <div class="w-full h-32 overflow-hidden rounded-lg border-brutal">
                            <img src="https://i.ytimg.com/vi/BPfLMccFhLk/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCZG-buioKCNuzqv5uya1ivqtv82A" alt="Post Image" class="w-full h-full object-cover">
                        </div>
                        <a href="/post-detail/1" class="absolute inset-0"></a>
                    </div>
                    <div class="relative group">
                        <div class="w-full h-32 overflow-hidden rounded-lg border-brutal">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBaJ07gNAlhkbj0yd0oTZywicRTZv_6odKRA&s" alt="Post Image" class="w-full h-full object-cover">
                        </div>
                        <a href="/post-detail/1" class="absolute inset-0"></a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>