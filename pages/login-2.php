<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sawala</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Tetap gunakan file CSS kamu -->
</head>
<body class="bg-[#FFF3E0] text-[#1A1A1A] font-sans flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Login ke Sawala</h2>
    <form action="process_login.php" method="POST" class="space-y-4">
      <div class="relative">
        <i class="fa-solid fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
        <input type="text" name="username" placeholder="Username" required 
          class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFDB58]">
      </div>
      <div class="relative">
        <i class="fa-solid fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
        <input type="password" name="password" placeholder="Password" required 
          class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FFDB58]">
      </div>
      <button type="submit" 
        class="w-full bg-[#1A1A1A] text-white font-bold py-2 rounded-lg hover:bg-[#333333]">
        Login
      </button>
    </form>
    <p class="text-gray-600 mt-4">Belum punya akun? <a href="register.php" class="text-[#FF7000] font-semibold">Daftar di sini</a></p>
  </div>
</body>
</html>