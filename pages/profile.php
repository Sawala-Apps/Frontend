<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-[62%] flex flex-col items-center">
        <main class="container mx-auto flex flex-col items-center">
            <?php include '../includes/header.php'; ?>
            <div class="flex flex-col space-y-4 w-[80%] max-lg:w-[100%] border-brutal shadow-brutal rounded-lg p-4 bg-[#DFE5F2]">
                <div class="flex flex-row items-center justify-between w-full mb-8">
                    <div class="flex flex-row items-center space-x-6">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-brutal shadow-brutal">
                            <img src="https://media.tenor.com/VGVjPI0mDS4AAAAe/hanni.png" alt="Profile Picture" class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col">
                        <div class="flex flex-row p-2 items-center justify-center">
                        <span class="text-black text-2xl font-bold">name</span>
                        <span class="text-gray-800 text-xl ml-4">@uid</span>
                        </div>
                        <button id="settingsButton" class="px-4 py-2 bg-[#88AAEE] hover:bg-blue-600 text-black rounded-lg shadow-brutal btn-brutal border-brutal">Settings</button>
                        </div>
                    </div>
                </div>

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

    <div id="settingsModal" class="fixed inset-0 bg-black bg-opacity-20 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <div class="flex flex-row">
            <h2 class="text-xl font-bold mb-4">Settings</h2>
            <h2 class="ml-auto hover:cursor-pointer" id="closeModal">x</h2>
            </div>
            <div class="space-y-4">
                <button class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg btn-brutal shadow-brutal border-brutal" id="editProfileButton">Edit Profile</button>
                <button class="w-full py-2 px-4 bg-yellow-500 text-white rounded-lg btn-brutal shadow-brutal border-brutal" id="changePasswordButton">Change Password</button>
                <button class="w-full py-2 px-4 bg-red-500 text-white rounded-lg btn-brutal shadow-brutal border-brutal">Logout</button>
            </div>
        </div>
    </div>

    <div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-xl font-bold mb-4">Edit Profile</h2>
            <button class="absolute top-2 right-2 text-gray-500 close-modal hover:cursor-pointer">&times;</button>
            <form id="editProfileForm">
                <label class="block mb-2">Full name</label>
                <input id="newName" type="text" class="w-full mb-4 border p-2 rounded-lg">
                <label class="block mb-2">Profile Picture</label>
                <input id="image" type="file" class="w-full mb-4 border p-2 rounded-lg">
                <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg btn-brutal border-brutal shadow-brutal">Save Changes</button>
            </form>
        </div>
    </div>

    <div id="changePasswordModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-xl font-bold mb-4">Change Password</h2>
            <button class="absolute top-2 right-2 text-gray-500 close-modal hover:cursor-pointer">&times;</button>
            <form id="changePasswordForm">
                <label class="block mb-2">Old Password</label>
                <input id="oldPassword" type="password" class="w-full mb-4 border p-2 rounded-lg">
                <label class="block mb-2">New Password</label>
                <input id="newPassword" type="password" class="w-full mb-4 border p-2 rounded-lg">
                <small id="passwordHelp" class="text-red-500">Password harus 6-12 karakter, mengandung 1 huruf kapital, dan 1 simbol.</small>
                <label class="block mb-2">Confirm Password</label>
                <input id="confirmPassword" type="password" class="w-full mb-4 border p-2 rounded-lg">
                <button type="submit" class="w-full py-2 px-4 bg-yellow-500 text-white rounded-lg btn-brutal border-brutal shadow-brutal">Save Password</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("settingsButton").addEventListener("click", function() {
            document.getElementById("settingsModal").classList.remove("hidden");
        });

        document.getElementById("closeModal").addEventListener("click", function() {
            document.getElementById("settingsModal").classList.add("hidden");
        });

        document.getElementById("editProfileButton").addEventListener("click", function() {
            document.getElementById("editProfileModal").classList.remove("hidden");
        });

        document.getElementById("changePasswordButton").addEventListener("click", function() {
            document.getElementById("changePasswordModal").classList.remove("hidden");
        });

        document.querySelectorAll(".close-modal").forEach(button => {
            button.addEventListener("click", function() {
                this.parentElement.parentElement.classList.add("hidden");
            });
        });

        function validatePassword(password) {
            const minLength = 6;
            const maxLength = 12;
            const hasUpperCase = /[A-Z]/.test(password);
            const hasSymbol = /[!@#$%^&*(),.?":{}|<>]/.test(password);
            const isValidLength = password.length >= minLength && password.length <= maxLength;
            return hasUpperCase && hasSymbol && isValidLength;
        }

        document.getElementById("newPassword").addEventListener("input", function() {
            const password = document.getElementById("newPassword").value;
            const passwordHelp = document.getElementById("passwordHelp");

            if (validatePassword(password)) {
                passwordHelp.classList.add("hidden");
            } else {
                passwordHelp.classList.remove("hidden");
            }
        });

        document.getElementById("editProfileForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const token = localStorage.getItem("token");
            const name = document.getElementById("newName").value;
            const image = document.getElementById("image").files[0];
            const formData = new FormData();
            formData.append("fullname", name);
            if (image) {
                formData.append("profilePicture", image);
            }

            axios.patch("https://backend-production-c986.up.railway.app/profile", formData, {
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "multipart/form-data"
                }
            })
            .then(function (response) {
                alert("Berhasil merubah username");
                document.getElementById("newName").value = '';
                document.getElementById("image").value = '';
                document.getElementById("editProfileModal").classList.add("hidden");
            })
            .catch(function (error) {
                alert("Gagal merubah username");
                document.getElementById("newName").value = '';
                document.getElementById("image").value = '';
            })
        });

        document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const token = localStorage.getItem("token");
            const oldPw = document.getElementById("oldPassword").value;
            const newPw = document.getElementById("newPassword").value;
            const confPw = document.getElementById("confirmPassword").value;

            if (newPw !== confPw) {
                alert("Password Harus Sama")
            } else if (!validatePassword(newPw)) {
                alert("Password tidak memenuhi kriteria");
            } else {
                axios.patch("https://backend-production-c986.up.railway.app/profile/password", {
                        "oldPassword": oldPw,
                        "newPassword": confPw
                    }, {
                    headers: {
                        "Authorization": `Bearer ${token}`
                    }
                })
                .then(function (response) {
                    alert("Berhasil merubah password");
                    document.getElementById("oldPassword").value = '';
                    document.getElementById("newPassword").value = '';
                    document.getElementById("confirmPassword").value = '';
                    document.getElementById("changePasswordModal").classList.add("hidden");
                })
                .catch(function (error) {
                    alert("Gagal merubah password");
            });
            }
        });
    </script>
</body>
</html>