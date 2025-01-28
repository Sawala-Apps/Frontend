<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawara - Ruang Diskusi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Tetap gunakan file CSS kamu -->
</head>
<body class="bg-[#FFF3E0] text-[#1A1A1A] font-sans">
  <!-- Header -->
  <header class="flex flex-wrap justify-between items-center p-6 bg-[#FFF3E0]">
    <div class="text-3xl font-bold text-[#1A1A1A]">Sawara</div>
    <nav class="space-x-4 text-gray-800 font-semibold hidden sm:flex">
      <a href="#" class="border-2 border-gray-800 rounded-full px-3 py-1 active:border-gray-800 hover:font-bold">Home</a>
      <a href="#" class="border-2 border-transparent rounded-full px-3 py-1 active:border-gray-800 hover:font-bold">Projects</a>
      <a href="#" class="border-2 border-transparent rounded-full px-3 py-1 active:border-gray-800 hover:font-bold">Services</a>
      <a href="#" class="border-2 border-transparent rounded-full px-3 py-1 active:border-gray-800 hover:font-bold">Contact</a>
    </nav>
    <a href="pages/feed.php" class="px-4 py-2 mt-4 bg-[#1A1A1A] text-[#FFFFFF] rounded-xl font-bold hover:bg-[#333333] sm:mt-0">
      Login here
    </a>
  </header>

  <!-- Main Content -->
  <main class="flex flex-col-reverse lg:flex-row items-center justify-around mt-12 px-6 py-12 space-y-10 lg:space-y-0 lg:space-x-10">
    <!-- Left Section: Heading and Get Started -->
    <div class="max-w-lg text-center lg:text-left">
      <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 mb-6">
        Sawara: Platform<br> untuk Diskusi<br> dan Kolaborasi
      </h1>
      <p class="text-gray-800 text-base lg:text-lg">
        Sawara membuka ruang untuk berpendapat, berdiskusi, dan berkolaborasi dalam komunitas yang inklusif.
      </p>
      <a href="#" class="px-6 py-3 bg-[#FFDB58] border-brutal shadow-brutal text-black font-bold text-lg rounded-xl hover:bg-[#FF7000] mt-6 inline-flex items-center">
        Get Started 
        <i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>

    <!-- Right Section: Image Section -->
    <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-6 sm:space-y-0 items-center">
      <!-- Person 1 -->
      <div class="relative bg-[#FFFFFF] border-brutal rounded-lg p-4 shadow-brutal">
        <img src="assets/images/kiri.png" alt="Person 1" class="rounded-lg w-40 sm:w-48">
        <div class="absolute top-[-10px] right-[-10px] bg-[#FFDD00] p-2 rounded-full">
          <span class="block w-4 h-4 bg-[#FF4E00] rounded-full"></span>
        </div>
      </div>
      <!-- Person 2 -->
      <div class="relative bg-[#FFFFFF] border-brutal rounded-lg p-4 shadow-brutal">
        <img src="assets/images/kanan.png" alt="Person 2" class="rounded-lg w-40 sm:w-48">
        <div class="absolute top-[-10px] right-[-10px] bg-[#333333] p-2 rounded-full">
          <span class="block w-4 h-4 bg-[#FFDD00] rounded-full"></span>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
