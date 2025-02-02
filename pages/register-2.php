<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Sawala</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-[#FFF3E0] text-[#1A1A1A] font-sans flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-bold text-center mb-6">Register</h2>
    <form action="register_process.php" method="POST" class="space-y-4">
      <div class="relative">
        <i class="fa-solid fa-user absolute left-3 top-3 text-gray-500"></i>
        <input type="text" name="username" placeholder="Username" required 
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-[#FFDB58]">
      </div>
      <div class="relative">
        <i class="fa-solid fa-envelope absolute left-3 top-3 text-gray-500"></i>
        <input type="email" name="email" placeholder="Email" required 
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-[#FFDB58]">
      </div>
      <div class="relative">
        <i class="fa-solid fa-lock absolute left-3 top-3 text-gray-500"></i>
        <input type="password" name="password" placeholder="Password" required 
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-[#FFDB58]">
      </div>
      <div class="relative">
        <i class="fa-solid fa-lock absolute left-3 top-3 text-gray-500"></i>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required 
          class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-[#FFDB58]">
      </div>
      <button type="submit" class="w-full bg-[#FFDB58] text-[#1A1A1A] font-bold py-2 rounded-lg hover:bg-[#FF7000]">Register</button>
    </form>
    <p class="text-center mt-4 text-sm">Already have an account? <a href="login-2.php" class="text-[#FF7000] font-bold">Login here</a></p>
  </div>
</body>
</html>