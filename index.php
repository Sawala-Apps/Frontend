<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawala - Ruang Diskusi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css"> <!-- Tetap gunakan file CSS kamu -->
</head>
<body class="bg-[#FFF3E0] text-[#1A1A1A] font-sans">
  <!-- Header -->
  <header class="flex flex-wrap justify-between items-center p-6 bg-[#FFF3E0] sticky top-0 z-50">
    <div class="text-3xl font-bold text-[#1A1A1A]">Sawala</div>
    <nav class="hidden sm:flex space-x-4 text-gray-800 font-semibold">
      <a href="#" class="border-2 border-gray-800 rounded-full px-3 py-1 hover:font-bold">Home</a>
      <a href="#features" class="border-2 border-transparent rounded-full px-3 py-1 hover:font-bold">Features</a>
      <a href="#" class="border-2 border-transparent rounded-full px-3 py-1 hover:font-bold">Services</a>
      <a href="#" class="border-2 border-transparent rounded-full px-3 py-1 hover:font-bold">Contact</a>
    </nav>
    <a href="pages/feed.php" class="px-4 py-2 mt-4 sm:mt-0 bg-[#1A1A1A] text-[#FFFFFF] rounded-xl font-bold hover:bg-[#333333]">
      Login here
    </a>
  </header>

  <!-- Main Content -->
  <main class="flex flex-col-reverse lg:flex-row items-center justify-around mt-12 px-6 py-12 space-y-10 lg:space-y-0 lg:space-x-10">
    <!-- Left Section -->
    <div class="max-w-lg text-center lg:text-left">
      <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 mb-6">
        Sawala: Platform<br> untuk Diskusi<br> dan Kolaborasi
      </h1>
      <p class="text-gray-800 text-base lg:text-lg">
        Sawala membuka ruang untuk berpendapat, berdiskusi, dan berkolaborasi dalam komunitas yang inklusif.
      </p>
      <a href="#" class="px-6 py-3 mt-6 bg-[#FFDB58] shadow-brutal btn-brutal border-brutal text-black font-bold text-lg rounded-xl hover:bg-[#FF7000] inline-flex items-center">
        Get Started
        <i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>

    <!-- Right Section -->
    <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-6 sm:space-y-0 items-center">
      <!-- Person 1 -->
      <div class="relative bg-[#FFFFFF] shadow-brutal border-brutal rounded-lg p-4">
        <img src="assets/images/kiri.png" alt="Person 1" class="rounded-lg w-40 sm:w-48">
        <div class="absolute top-[-10px] right-[-10px] bg-[#FFDD00] p-2 rounded-full">
          <span class="block w-4 h-4 bg-[#FF4E00] rounded-full"></span>
        </div>
      </div>
      <!-- Person 2 -->
      <div class="relative bg-[#FFFFFF] shadow-brutal border-brutal rounded-lg p-4">
        <img src="assets/images/kanan.png" alt="Person 2" class="rounded-lg w-40 sm:w-48">
        <div class="absolute top-[-10px] right-[-10px] bg-[#333333] p-2 rounded-full">
          <span class="block w-4 h-4 bg-[#FFDD00] rounded-full"></span>
        </div>
      </div>
    </div>
  </main>

  <!-- Services Section -->
  <section id="features" class="py-12 px-6">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Fitur Utama Sawala untuk Mempermudah Diskusi dan Kolaborasi</h2>
      <p class="text-lg text-gray-700">Sawala dirancang untuk memfasilitasi diskusi yang lebih mudah dan interaktif antar pengguna, menyediakan berbagai alat untuk berbagi informasi, berbicara, dan membangun komunitas yang lebih dekat.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Web Design -->
      <div class="bg-[#D7F2EE] shadow-join border-brutal rounded-xl p-6 flex flex-col items-center">
        <div class="bg-white rounded-full p-4 mb-4">
          <img src="https://placehold.co/400" alt="Feed Icon" class="w-12 h-12">
        </div>
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">Feed Interaktif</h3>
        <p class="text-gray-700 text-center">Fitur feed interaktif untuk berbagi pemikiran, artikel, dan diskusi dengan komunitas yang aktif.</p>
      </div>
      <!-- Development -->
      <div class="bg-[#FFE8D2] shadow-join border-brutal rounded-xl p-6 flex flex-col items-center">
        <div class="bg-white rounded-full p-4 mb-4">
          <img src="https://placehold.co/400" alt="Story Icon" class="w-12 h-12">
        </div>
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">Bagikan Ceritamu</h3>
        <p class="text-gray-700 text-center">Berbagi cerita pribadi dan pengalaman dalam komunitas untuk memperkaya diskusi.</p>
      </div>
      <!-- Ecommerce -->
      <div class="bg-[#FFE8A3] shadow-join border-brutal rounded-xl p-6 flex flex-col items-center">
        <div class="bg-white rounded-full p-4 mb-4">
          <img src="https://placehold.co/400" alt="Chatbot Icon" class="w-12 h-12">
        </div>
        <h3 class="text-2xl font-semibold text-gray-900 mb-2">Chat Bot</h3>
        <p class="text-gray-700 text-center">Fitur chatbot untuk memberikan bantuan seputar pertanyaan umum dan navigasi di platform Sawala.</p>
      </div>
    </div>
  </section>
</body>
</html>
