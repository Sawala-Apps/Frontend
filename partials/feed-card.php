<?php
// post_card.php
?>
<div class="max-w-xl mx-auto mt-10 p-6 bg-white border-brutal shadow-brutal rounded-lg">
    <!-- Header: Username and Date -->
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <img src="<?php echo htmlspecialchars($post['pfp_url']); ?>" alt="User Avatar" class="w-10 h-10 rounded-full border-brutal shadow-brutal">
            <div>
                <h3 class="font-bold text-gray-900"><?php echo htmlspecialchars($post['author']); ?></h3>
                <p class="text-sm text-gray-600"><?php echo htmlspecialchars($post['date']); ?></p>
            </div>
        </div>
    </div>

    <!-- Post Body -->
    <div class="mt-4">
        <p class="text-gray-800 text-lg">
          <?php echo nl2br(htmlspecialchars($post['content'])); ?>
        </p>
    </div>

    <!-- Post Image -->
    <div class="mt-4">
        <img src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="Post Image" class="w-[60vh] h-[40vh] border-brutal shadow-brutal rounded-lg">
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center justify-between mt-6">
        <button class="flex items-center space-x-2 px-4 py-2 bg-blue-500 text-white font-bold rounded-lg shadow-brutal hover:bg-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L9.75 14.25m0-4.5l4.5 4.5M21 12c0 4.9706-4.0294 9-9 9s-9-4.0294-9-9 4.0294-9 9-9 9 4.0294 9 9z" />
            </svg>
            <span>Like</span>
        </button>
        <button class="flex items-center space-x-2 px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-brutal hover:bg-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 4.5h6m6-6.75v13.5c0 .6213-.5037 1.125-1.125 1.125H4.125C3.5037 21 3 20.4963 3 19.875V6.375C3 5.7537 3.5037 5.25 4.125 5.25h9.375c.6213 0 1.125.5037 1.125 1.125v1.5c0 .6213-.5037 1.125-1.125 1.125H7.5z" />
            </svg>
            <span>Comment</span>
        </button>
        <button class="flex items-center space-x-2 px-4 py-2 bg-yellow-500 text-white font-bold rounded-lg shadow-brutal hover:bg-yellow-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12c0 4.9706-4.0294 9-9 9s-9-4.0294-9-9 4.0294-9 9-9 9 4.0294 9 9z" />
            </svg>
            <span>Share</span>
        </button>
    </div>
</div>
<?php
// End of post_card.php
?>
