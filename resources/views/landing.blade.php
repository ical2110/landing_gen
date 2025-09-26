<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenesisxClean - We Wash It As You Wish</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- 1. Tambahkan CSS Swiper.js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            /* Ganti dengan URL gambar latar Anda */
            background-image: url('https://images.unsplash.com/photo-1608231387042-66d1773070a5?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        /* Kustomisasi warna navigasi slider */
        .swiper-button-next, .swiper-button-prev {
            color: #fff; /* Warna panah */
        }
        .swiper-pagination-bullet-active {
            background: #3b82f6 !important; /* Warna titik pagination aktif (biru) */
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- 1. Hero Section -->
    <section class="hero-bg relative min-h-screen flex items-center justify-center text-center text-white">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 p-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">GenesisxClean</h1>
            <p class="text-2xl md:text-4xl mb-6">We Wash It As You Wish</p>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Kembalikan Kilau Sepatumu, Tanpa Ribet!</p>

            <a href="https://wa.me/6289659599803" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                Cuci Sepatu Sekarang!
            </a>
        </div>
    </section>

    <!-- 2. About Us -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Mengapa GenesisxClean?</h2>
            <p class="max-w-3xl mx-auto mb-12 text-gray-300">
                Kami adalah solusi terbaik untuk perawatan sepatu Anda di Cicalengka, Cikancung, Rancaekek, dan Nagreg. Dengan komitmen pada kualitas dan kenyamanan, kami memastikan setiap pasang sepatu kembali bersih maksimal seperti baru.
            </p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Hasil Bersih Maksimal</h3>
                    <p class="text-gray-400">Menggunakan teknik dan produk premium terbaik untuk hasil yang memuaskan.</p>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Pengerjaan Cepat</h3>
                    <p class="text-gray-400">Sepatu Anda kembali bersih dan wangi dalam waktu singkat.</p>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Harga Terjangkau</h3>
                    <p class="text-gray-400">Kualitas premium dengan harga yang bersahabat di kantong.</p>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Gratis Antar Jemput</h3>
                    <p class="text-gray-400">Layanan pick-up & delivery GRATIS untuk minimal 2 pasang sepatu.</p>
                </div>
                <div class="bg-gray-700 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Produk Premium</h3>
                    <p class="text-gray-400">Aman untuk berbagai jenis bahan sepatu, dari kanvas hingga kulit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Layanan Kami -->
    <section id="services" class="py-20 bg-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Layanan Perawatan Sepatu Premium Kami</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Deep Cleaning</h3>
                    <p class="text-gray-400">Pembersihan menyeluruh untuk kotoran membandel pada upper, midsole, dan outsole.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Fast Cleaning</h3>
                    <p class="text-gray-400">Solusi cepat untuk sepatu yang butuh penyegaran instan di bagian luar.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Unyellowing Midsole</h3>
                    <p class="text-gray-400">Mengembalikan warna putih cerah pada midsole yang menguning karena oksidasi.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-2">Unyellowing Insole</h3>
                    <p class="text-gray-400">Membersihkan dan mencerahkan insole yang kotor dan berbau tidak sedap.</p>
                </div>
            </div>
            <a href="https://wa.me/6289659599803?text=Halo,%20boleh%20minta%20pricelist-nya?" target="_blank" class="mt-12 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300">
                Lihat Daftar Harga
            </a>
        </div>
    </section>

    <!-- 4. Cara Order -->
    <section id="how-to-order" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Hanya 3 Langkah Mudah!</h2>
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-16">
                <div class="flex flex-col items-center">
                    <div class="bg-blue-600 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mb-4">1</div>
                    <h3 class="font-bold text-xl mb-2">Hubungi Kami</h3>
                    <p class="text-gray-400">Kirim pesan via WhatsApp atau Instagram.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-blue-600 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mb-4">2</div>
                    <h3 class="font-bold text-xl mb-2">Jemput / Drop Off</h3>
                    <p class="text-gray-400">Sepatu dijemput (min. 2 psg) atau antar ke Drop Point.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="bg-blue-600 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold mb-4">3</div>
                    <h3 class="font-bold text-xl mb-2">Sepatu Bersih Kembali</h3>
                    <p class="text-gray-400">Kami antar sepatu bersih & wangi sampai ke rumahmu!</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 6. Galeri Slider -->
    <section id="gallery" class="py-20 bg-gray-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Bukti Nyata Kualitas Kami</h2>
            <!-- Struktur Slider Swiper.js -->
            <div class="swiper-container max-w-3xl mx-auto rounded-lg">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide"><img src="{{ asset('images/sepatu1-sesudah.jpg') }}" alt="Hasil Cuci Sepatu 1" class="w-full h-96 object-cover"></div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide"><img src="{{ asset('images/sepatu2-sesudah.jpg') }}" alt="Hasil Cuci Sepatu 2" class="w-full h-96 object-cover"></div>
                    <!-- Slide 3 (Contoh, ganti dengan gambar Anda) -->
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1887" alt="Hasil Cuci Sepatu 3" class="w-full h-96 object-cover"></div>
                    <!-- Slide 4 (Contoh, ganti dengan gambar Anda) -->
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=1964" alt="Hasil Cuci Sepatu 4" class="w-full h-96 object-cover"></div>
                </div>
                <!-- Tambahkan Pagination (titik-titik di bawah) -->
                <div class="swiper-pagination"></div>

                <!-- Tambahkan Tombol Navigasi (panah kiri/kanan) -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- 7. Hubungi Kami -->
    <section id="contact" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Siap Mencuci Sepatumu?</h2>
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8 text-left">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl ">Informasi Kontak</h3>
                    <div class="flex items-center">
                        <!-- WhatsApp Icon -->
                        <a href="https://wa.me/6289659599803" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <!-- Menambahkan class w-8 h-8 untuk mengatur ukuran -->
                            <img src="{{ asset('images/wa.png') }}" alt="WhatsApp Logo" class="w-16 h-16">
                        </a>
                        <!-- Instagram Icon -->
                        <a href="https://instagram.com/genesisxproject" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <!-- Menambahkan class w-8 h-8 untuk mengatur ukuran -->
                            <img src="{{ asset('images/instagram.png') }}" alt="Instagram Logo" class="w-14 h-14">
                        </a>
                    </div>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="font-bold text-xl mb-4">Alamat Drop Point & Area Layanan</h3>
                    <p class="mb-2"><strong>Drop Point 1:</strong> Jl. Dipatikur No.50</p>
                    <p class="mb-4"><strong>Drop Point 2:</strong> DIBARBERS</p>
                    <p><strong>Area Layanan:</strong> Cicalengka, Cikancung, Rancaekek, Nagreg</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 py-6">
        <div class="container mx-auto px-6 text-center text-gray-400">
            <!-- Ganti teks dengan tag img untuk logo di footer -->
            <!-- Mengubah ukuran logo dari h-8 menjadi h-12 -->
            <img src="{{ asset('images/logo_01.png') }}" alt="GenesisxClean Logo" class="h-16 mx-auto mb-4">
            <p class="text-sm">&copy; {{ date('Y') }} GenesisxClean.</p>
            <p class="text-sm">All Rights Reserved.</p>
        </div>
    </footer>

    <!-- 2. Tambahkan JS Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- 3. Inisialisasi Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            // Opsi
            loop: true, // Agar slider bisa berputar terus menerus
            autoplay: {
                delay: 3000, // Pindah slide setiap 3 detik
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
