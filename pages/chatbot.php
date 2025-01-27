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
<div class="w-[62%] flex flex-col items-center">
    <main class="container mx-auto flex flex-col items-center">
    <?php include '../includes/header.php'; ?>
    <div class="flex flex-col space-y-4 w-[80%] border-brutal shadow-brutal rounded-lg p-4 bg-[#DFE5F2]">
        <div class="bg-white p-4 border-brutal shadow-brutal rounded-lg">
            <div class="flex justify-between items-center mb-2">
                <span class="text-gray-800 font-semibold">User1</span>
                <span class="text-gray-500 text-sm">10:45 AM</span>
            </div>
            <p class="text-gray-700">TESS</p>
        </div>
        <div class="bg-white p-4 border-brutal shadow-brutal rounded-lg">
            <div class="flex justify-between items-center mb-2">
                <span class="text-gray-800 font-semibold">User2</span>
                <span class="text-gray-500 text-sm">10:46 AM</span>
            </div>
            <p class="text-gray-700">Tess</p>
        </div>

        <form id="chatForm" class="mt-4">
            <div class="flex flex-row space-x-4">
                <textarea id="message" name="message" class="w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none resize-none" placeholder="Type your message..." rows="2" required></textarea>
                <button type="submit" class="px-6 py-2 bg-blue-500 text-black font-bold rounded-lg shadow-brutal hover:bg-blue-600 border-brutal">Send</button>
            </div>
        </form>
    </div>
    </main>
    </div>
    
</body>
</html>
