<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<nav class="bg-[#DFE5F2] border-brutal shadow-brutal p-4 w-[80%] mt-5">
    <div class="max-w-5xl mx-auto flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-gray-900">Sawala</a>
        <ul class="flex space-x-6 text-lg text-gray-800">
            <li>
                <a href="index.php" 
                   class="hover:text-blue-500 <?php echo $current_page == 'feed.php' ? 'border-2 border-black rounded-md' : ''; ?> p-2">
                    Home
                </a>
            </li>
            <li>
                <a href="chatbot.php" 
                   class="hover:text-blue-500 <?php echo $current_page == 'chatbot.php' ? 'border-2 border-black rounded-md' : ''; ?>">
                    Chatbot
                </a>
            </li>
            <li>
                <a href="profile.php" 
                   class="hover:text-blue-500 <?php echo $current_page == 'profile.php' ? 'border-2 border-black rounded-md' : ''; ?>">
                    Profile
                </a>
            </li>
        </ul>
    </div>
</nav>
