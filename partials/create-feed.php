<div class="w-[80%] max-lg:w-[100%] mx-auto mb-6 p-6 bg-[#DFE5F2] border-brutal shadow-brutal rounded-lg">
    <form id="postForm">
        <div class="mb-4">
            <label for="caption" class="block text-gray-800 font-bold mb-2">Caption:</label>
            <textarea id="caption" name="caption" class="w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none resize-none bg-white" placeholder="What's on your mind?" rows="4" required></textarea>
        </div>
        <div class="mb-6">
            <label for="image" class="block text-gray-800 font-bold mb-2">Upload Image:</label>
            <div class="flex flex-row justify-center items-center max-lg:flex-col mb-[-7px]">
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
        const token = localStorage.getItem("token");

       const formData = new FormData();
       formData.append("contentText", caption);
       if (image) {
        formData.append("mediaFiles", image);
       }

       axios.post("https://backend-production-c986.up.railway.app/feeds", formData, {
        headers: {
            "Authorization": `Bearer ${token}`,
            "Content-Type": "multipart/form-data"
        }
       })
       .then(function (response) {
        alert("postingan berhasil dibuat!");
        window.location.reload()
        console.log(response.data);
       })
       .catch(function (error) {
        alert("Gagal membuat postingan");
        console.error(error);
       })
       .finally(function () {
        document.getElementById("caption").value = ""; 
            document.getElementById("image").value = null;
       })
    });
</script>