<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CandyReport - Lapor Manis, Hidup Lebih Asik!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'candy-pink': '#ff69b4',
                        'candy-purple': '#9d4edd',
                        'candy-blue': '#00bfff',
                        'candy-green': '#00ff7f',
                        'candy-yellow': '#ffd700',
                        'candy-orange': '#ff6347',
                        'candy-mint': '#98fb98',
                        'candy-lavender': '#dda0dd'
                    },
                    animation: {
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 4s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                    },
                    keyframes: {
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .rainbow-text {
            background: linear-gradient(45deg, #ff69b4, #9d4edd, #00bfff, #00ff7f, #ffd700, #ff6347);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: rainbow 3s ease-in-out infinite;
        }

        @keyframes rainbow {
            0%, 100% { filter: hue-rotate(0deg); }
            50% { filter: hue-rotate(180deg); }
        }

        .candy-shadow {
            box-shadow: 0 10px 25px rgba(255, 105, 180, 0.3), 0 6px 12px rgba(157, 78, 221, 0.2);
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-pink-100 via-purple-50 to-blue-100 min-h-screen">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-pink-200">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-candy-pink to-candy-purple rounded-full flex items-center justify-center animate-pulse-slow">
                        <span class="text-white font-bold text-lg">🍭</span>
                    </div>
                    <span class="text-2xl font-bold rainbow-text">CandyReport</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Beranda</a>
                    <a href="#features" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Fitur</a>
                    <a href="#testimonials" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Testimoni</a>
                    <a href="#contact" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Kontak</a>
                    <a href="{{ route('register') }}" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Register</a>
                    <a href="{{ route('login') }}" class="text-candy-purple hover:text-candy-pink transition-colors font-medium">Login</a>
                </div>
                <button class="md:hidden text-candy-purple">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-20 pb-16 px-4">
        <div class="container mx-auto text-center">
            <div class="max-w-4xl mx-auto">
                <!-- Floating decorative elements -->
                <div class="absolute top-32 left-10 w-16 h-16 bg-gradient-to-r from-candy-yellow to-candy-orange rounded-full opacity-70 floating"></div>
                <div class="absolute top-40 right-20 w-12 h-12 bg-gradient-to-r from-candy-green to-candy-mint rounded-full opacity-60 floating" style="animation-delay: -2s;"></div>
                <div class="absolute top-60 left-1/4 w-8 h-8 bg-gradient-to-r from-candy-blue to-candy-lavender rounded-full opacity-80 floating" style="animation-delay: -4s;"></div>

                <div class="relative z-10">
                    <div class="inline-block mb-6 px-6 py-2 bg-gradient-to-r from-candy-pink via-candy-purple to-candy-blue rounded-full text-white font-semibold text-sm animate-bounce-slow candy-shadow">
                        ✨ Platform Pengaduan Termanis di Indonesia! ✨
                    </div>

                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        <span class="rainbow-text">Lapor Manis,</span><br>
                        <span class="bg-gradient-to-r from-candy-orange via-candy-yellow to-candy-green bg-clip-text text-transparent">Hidup Lebih Asik!</span>
                    </h1>

                    <p class="text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Sampaikan keluhan dan aspirasi Anda dengan cara yang menyenangkan!
                        <span class="text-candy-purple font-semibold">CandyReport</span> membuat proses pelaporan jadi semanis permen! 🍬
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                        <button class="px-12 py-4 bg-gradient-to-r from-candy-green via-candy-mint to-candy-blue text-white font-bold rounded-full hover:scale-105 transition-all duration-300 candy-shadow ">
                            <a href="{{ route('login') }}">Login</a>
                        </button>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto">
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-4 candy-shadow hover:scale-105 transition-transform">
                            <div class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-candy-pink to-candy-purple bg-clip-text text-transparent">50K+</div>
                            <div class="text-sm text-gray-600">Laporan Manis</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-4 candy-shadow hover:scale-105 transition-transform">
                            <div class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-candy-blue to-candy-green bg-clip-text text-transparent">98%</div>
                            <div class="text-sm text-gray-600">Tingkat Kepuasan</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-4 candy-shadow hover:scale-105 transition-transform">
                            <div class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-candy-yellow to-candy-orange bg-clip-text text-transparent">24/7</div>
                            <div class="text-sm text-gray-600">Layanan Aktif</div>
                        </div>
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-4 candy-shadow hover:scale-105 transition-transform">
                            <div class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-candy-lavender to-candy-mint bg-clip-text text-transparent">100+</div>
                            <div class="text-sm text-gray-600">Kota Terjangkau</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 px-4 bg-gradient-to-r from-purple-100 via-pink-50 to-blue-100">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    <span class="rainbow-text">Fitur Semanis Permen</span> 🍭
                </h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                    Nikmati pengalaman pelaporan yang tak terlupakan dengan fitur-fitur canggih kami!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-candy-pink/20 to-candy-purple/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-pink to-candy-purple rounded-2xl flex items-center justify-center mb-6 animate-wiggle">
                        <span class="text-2xl">📝</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-purple mb-4">Lapor Super Mudah</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Interface yang colorful dan user-friendly membuat proses pelaporan jadi menyenangkan seperti bermain game!
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-candy-blue/20 to-candy-green/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-blue to-candy-green rounded-2xl flex items-center justify-center mb-6 animate-wiggle" style="animation-delay: -0.5s;">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-blue mb-4">Respon Kilat</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tim kami merespon laporan Anda dengan kecepatan cahaya! Notifikasi real-time untuk setiap update.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-candy-yellow/20 to-candy-orange/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-yellow to-candy-orange rounded-2xl flex items-center justify-center mb-6 animate-wiggle" style="animation-delay: -1s;">
                        <span class="text-2xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-orange mb-4">Privasi Terjaga</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Data Anda aman seperti permen dalam toples! Enkripsi tingkat militer untuk melindungi identitas Anda.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-gradient-to-br from-candy-green/20 to-candy-mint/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-green to-candy-mint rounded-2xl flex items-center justify-center mb-6 animate-wiggle" style="animation-delay: -1.5s;">
                        <span class="text-2xl">📊</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-green mb-4">Tracking Real-time</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pantau progress laporan Anda dengan dashboard yang colorful dan informatif!
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-gradient-to-br from-candy-lavender/20 to-candy-purple/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-lavender to-candy-purple rounded-2xl flex items-center justify-center mb-6 animate-wiggle" style="animation-delay: -2s;">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-lavender mb-4">AI Smart Routing</h3>
                    <p class="text-gray-700 leading-relaxed">
                        AI pintar kami mengarahkan laporan ke departemen yang tepat secara otomatis!
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-gradient-to-br from-candy-blue/20 to-candy-pink/20 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border border-white/30">
                    <div class="w-16 h-16 bg-gradient-to-r from-candy-blue to-candy-pink rounded-2xl flex items-center justify-center mb-6 animate-wiggle" style="animation-delay: -2.5s;">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <h3 class="text-xl font-bold text-candy-blue mb-4">Reward System</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Dapatkan poin dan badge untuk setiap laporan yang membantu memperbaiki lingkungan!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 px-4 bg-gradient-to-br from-yellow-100 via-pink-50 to-purple-100">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    <span class="rainbow-text">Kata Mereka</span> 💬
                </h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                    Dengarkan cerita manis dari pengguna setia CandyReport!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border-2 border-candy-pink/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-candy-pink to-candy-purple rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">SA</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-candy-purple">Sari Amelia</h4>
                            <p class="text-sm text-gray-600">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        "Wah, aplikasi ini benar-benar semanis namanya! Proses lapornya gampang banget dan responnya cepet. Sekarang lingkungan komplek jadi lebih bersih! 🌟"
                    </p>
                    <div class="flex text-candy-yellow text-xl">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border-2 border-candy-blue/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-candy-blue to-candy-green rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">BP</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-candy-blue">Budi Pratama</h4>
                            <p class="text-sm text-gray-600">Mahasiswa</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        "Interface-nya colorful dan fun banget! Nggak berasa lagi ngisi form laporan, tapi kayak main game. Fitur tracking-nya juga keren! 🎮"
                    </p>
                    <div class="flex text-candy-yellow text-xl">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 candy-shadow hover:scale-105 transition-all duration-300 border-2 border-candy-green/30">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-candy-green to-candy-mint rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">LK</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-candy-green">Linda Kusuma</h4>
                            <p class="text-sm text-gray-600">Pegawai Swasta</p>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        "Akhirnya ada platform yang bikin pelaporan jadi menyenangkan! Tim supportnya responsif dan selalu update progress. Recommended! 👍"
                    </p>
                    <div class="flex text-candy-yellow text-xl">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 relative overflow-hidden">
        <div style="background: linear-gradient(135deg, #ff69b4, #9d4edd, #00bfff, #00ff7f)" class="absolute inset-0"></div>
        <div class="container mx-auto text-center relative z-10">
            <!-- Floating elements -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-white/20 rounded-full floating"></div>
            <div class="absolute bottom-10 right-10 w-16 h-16 bg-white/30 rounded-full floating" style="animation-delay: -3s;"></div>
            <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-white/25 rounded-full floating" style="animation-delay: -1s;"></div>

            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    Siap Membuat Perubahan<br>
                    <span class="text-candy-yellow">Semanis Permen?</span> 🍬
                </h2>
                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Bergabunglah dengan ribuan pengguna yang sudah merasakan manisnya melaporkan keluhan dengan CandyReport!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button class="px-10 py-4 bg-white text-candy-purple font-bold rounded-full hover:scale-105 transition-all duration-300 candy-shadow">
                        🚀 Mulai Gratis Sekarang
                    </button>
                    <button class="px-10 py-4 bg-white/20 backdrop-blur-sm text-white font-bold rounded-full hover:scale-105 transition-all duration-300 border-2 border-white/30">
                        📞 Hubungi Kami
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="relative overflow-hidden">
        <div style="background: linear-gradient(135deg, #2d1b69, #9d4edd, #ff69b4)" class="absolute inset-0"></div>
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-candy-yellow to-candy-orange rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">🍭</span>
                        </div>
                        <span class="text-2xl font-bold text-white">CandyReport</span>
                    </div>
                    <p class="text-white/80 leading-relaxed mb-4">
                        Platform pengaduan masyarakat yang paling manis dan menyenangkan di Indonesia!
                    </p>
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:scale-110 transition-transform cursor-pointer">
                            <span class="text-white">📘</span>
                        </div>
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:scale-110 transition-transform cursor-pointer">
                            <span class="text-white">📷</span>
                        </div>
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:scale-110 transition-transform cursor-pointer">
                            <span class="text-white">🐦</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-6">Menu Utama</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-white/80 hover:text-candy-yellow transition-colors">Beranda</a></li>
                        <li><a href="#features" class="text-white/80 hover:text-candy-yellow transition-colors">Fitur</a></li>
                        <li><a href="#testimonials" class="text-white/80 hover:text-candy-yellow transition-colors">Testimoni</a></li>
                        <li><a href="#contact" class="text-white/80 hover:text-candy-yellow transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-6">Layanan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-white/80 hover:text-candy-yellow transition-colors">Lapor Infrastruktur</a></li>
                        <li><a href="#" class="text-white/80 hover:text-candy-yellow transition-colors">Lapor Lingkungan</a></li>
                        <li><a href="#" class="text-white/80 hover:text-candy-yellow transition-colors">Lapor Pelayanan</a></li>
                        <li><a href="#" class="text-white/80 hover:text-candy-yellow transition-colors">Saran & Kritik</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-6">Kontak Kami</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <span class="text-candy-yellow">📧</span>
                            <span class="text-white/80">hello@candyreport.id</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-candy-yellow">📞</span>
                            <span class="text-white/80">+62 812-3456-7890</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-candy-yellow">📍</span>
                            <span class="text-white/80">Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-white/20 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-white/60 text-sm mb-4 md:mb-0">
                        © 2024 CandyReport. Semua hak cipta dilindungi. Dibuat dengan 💖 untuk Indonesia.
                    </p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-white/60 hover:text-candy-yellow transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-white/60 hover:text-candy-yellow transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-white/60 hover:text-candy-yellow transition-colors">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to top button -->
    <button id="scrollTop" class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-candy-pink to-candy-purple rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none">
        ↑
    </button>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll to top button functionality
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.style.opacity = '1';
                scrollTopBtn.style.pointerEvents = 'auto';
            } else {
                scrollTopBtn.style.opacity = '0';
                scrollTopBtn.style.pointerEvents = 'none';
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add some interactive animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.candy-shadow');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>
</html>
