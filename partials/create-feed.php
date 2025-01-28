<div class="w-[80%] max-lg:w-[100%] mx-auto mb-6 p-6 bg-[#DFE5F2] border-brutal shadow-brutal rounded-lg">
    <form id="postForm">
        <div class="mb-4">
            <label for="caption" class="block text-gray-800 font-bold mb-2">Caption:</label>
            <textarea id="caption" name="caption" class="w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none resize-none" placeholder="What's on your mind?" rows="4" required></textarea>
        </div>
        <div class="mb-6">
            <label for="image" class="block text-gray-800 font-bold mb-2">Upload Image:</label>
            <div class="flex flex-row justify-center items-center max-lg:flex-col ">
                <input type="file" id="image" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-brutal file:shadow-brutal file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200" accept="image/*" required>
                <button type="submit" class="px-6 py-2 bg-[#88AAEE] text-black font-bold rounded-lg shadow-brutal hover:bg-blue-600 border-brutal btn-brutal max-lg:mt-4 max-lg:w-[100%]">Post</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById("postForm").addEventListener("submit", function(event) {
        event.preventDefault()
        const caption = document.getElementById("caption").value;
        const image = document.getElementById("image").files[0];

        console.log('post yh' + caption)
    });
</script>