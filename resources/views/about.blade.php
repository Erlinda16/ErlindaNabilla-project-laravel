<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<h1 class="text-3xl font-bold text-blue-600 my-4">
    Hello, I'm {{ $name }}!
</h1>
<p class="text-2xl p-4 text-gray-700 bg-gray-100 rounded-lg shadow-md">
    I live in {{ $address }}, and my email is {{ $email }}
</p>
<!-- Bagian Tentang -->
<section id="about" class="bg-green-50 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center">
    <!-- Gambar Ilustrasi -->
    <div class="md:w-1/2">
      <img src="https://ik.imagekit.io/waters2021/sehataqua/uploads/20240207083413_original.jpg?tr=w-660,h-371,q-50,fo-auto" alt="Ilustrasi Sayuran" class="rounded-lg shadow-lg">
    </div>
    
    <!-- Konten Teks -->
    <div class="mt-8 md:mt-0 md:w-1/2 md:pl-10">
      <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
        Tentang Kami
      </h2>
      <p class="mt-4 text-lg text-gray-700 leading-7">
        Kami hadir untuk berbagi informasi penting mengenai manfaat makan sayur untuk kesehatan tubuh. Sayuran adalah sumber utama nutrisi penting seperti vitamin, mineral, dan serat yang dibutuhkan untuk menjaga kebugaran serta meningkatkan daya tahan tubuh.
      </p>
      <p class="mt-4 text-lg text-gray-700 leading-7">
        Dengan informasi yang kami sajikan, kami berharap masyarakat dapat lebih menyadari pentingnya mengonsumsi sayuran setiap hari guna mencapai pola makan yang sehat dan seimbang.
      </p>
      <a href="{{ route ('index') }}" class="mt-6 inline-block bg-green-500 text-white px-6 py-2 rounded-md shadow hover:bg-green-600">
        Pelajari Lebih Lanjut 
      </a>
    </div>
  </div>
</section>
</body>
</html>