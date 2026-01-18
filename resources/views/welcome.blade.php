<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Ferdiyanto</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-bebas { font-family: 'Bebas Neue', sans-serif; }
        .text-outline {
            -webkit-text-stroke: 2px rgba(0, 0, 0, 0.1);
            color: transparent;
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        .modal-enter { animation: fade-in 0.3s ease-out forwards; }
        @keyframes fade-in {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body class="bg-gray-100 text-black overflow-x-hidden relative min-h-screen w-full selection:bg-red-500 selection:text-white">

    <div class="fixed inset-0 z-0 opacity-40 mix-blend-multiply pointer-events-none" 
         style="background-image: url('/img/paper.jpg'); background-size: cover;">
    </div>

    <div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-0 w-full text-center select-none pointer-events-none">
        <h1 class="text-[15rem] md:text-[25rem] font-bebas leading-none text-outline opacity-30 transition-all duration-700" id="big-bg-text">
            FERDIYANTO
        </h1>
    </div>

    <nav class="fixed top-0 left-0 w-full z-50 px-6 md:px-10 h-24 flex items-center transition-all duration-300" id="navbar">
        <div class="absolute left-6 md:left-10 flex items-center gap-3 z-20">
            <div class="text-xl font-bold tracking-widest border-2 border-black px-2 py-1 bg-white cursor-pointer hover:bg-black hover:text-white transition" onclick="window.scrollTo(0,0)">
                PORTFOLIO.
            </div>
            <div id="nav-name" class="overflow-hidden w-0 opacity-0 transition-all duration-500 ease-out border-l-2 border-black pl-0 whitespace-nowrap">
                <span class="text-xl font-bebas tracking-wide ml-3">FERDIYANTO</span>
            </div>
        </div>

        <div class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex gap-2 text-sm font-semibold uppercase tracking-wider bg-white/80 backdrop-blur-md px-2 py-2 rounded-full border border-gray-200 shadow-sm z-10">
            <a href="#home" class="nav-link px-5 py-2 rounded-full hover:bg-gray-100 transition-all duration-300" data-target="home">Profile</a>
            <a href="#projects" class="nav-link px-5 py-2 rounded-full hover:bg-gray-100 transition-all duration-300" data-target="projects">Projects</a>
            <a href="#certificate" class="nav-link px-5 py-2 rounded-full hover:bg-gray-100 transition-all duration-300" data-target="certificate">Certificate</a>
            <a href="#contact" class="nav-link px-5 py-2 rounded-full hover:bg-gray-100 transition-all duration-300" data-target="contact">Contact</a>
        </div>

        <div class="absolute right-6 md:right-10 hidden md:block z-20">
            <img src="/img/logo-kampus.jpg" alt="Logo Kampus" class="h-12 w-auto grayscale opacity-70 hover:grayscale-0 hover:opacity-100 transition duration-500 cursor-pointer">
        </div>
    </nav>

    <div class="fixed right-6 top-1/2 transform -translate-y-1/2 flex flex-col gap-4 z-50">
        <a href="#home" class="group flex items-center justify-end gap-2" title="Profile">
            <span class="opacity-0 group-hover:opacity-100 text-xs font-bold transition-opacity bg-white px-1 shadow-sm">PROFILE</span>
            <div class="side-dot w-3 h-3 bg-gray-400 rounded-full transition-all duration-300 border border-white/50 cursor-pointer" data-target="home"></div>
        </a>
        <a href="#projects" class="group flex items-center justify-end gap-2" title="Projects">
            <span class="opacity-0 group-hover:opacity-100 text-xs font-bold transition-opacity bg-white px-1 shadow-sm">PROJECTS</span>
            <div class="side-dot w-3 h-3 bg-gray-400 rounded-full transition-all duration-300 border border-white/50 cursor-pointer" data-target="projects"></div>
        </a>
        <a href="#certificate" class="group flex items-center justify-end gap-2" title="Certificate">
            <span class="opacity-0 group-hover:opacity-100 text-xs font-bold transition-opacity bg-white px-1 shadow-sm">CERT</span>
            <div class="side-dot w-3 h-3 bg-gray-400 rounded-full transition-all duration-300 border border-white/50 cursor-pointer" data-target="certificate"></div>
        </a>
        <a href="#contact" class="group flex items-center justify-end gap-2" title="Contact">
            <span class="opacity-0 group-hover:opacity-100 text-xs font-bold transition-opacity bg-white px-1 shadow-sm">CONTACT</span>
            <div class="side-dot w-3 h-3 bg-gray-400 rounded-full transition-all duration-300 border border-white/50 cursor-pointer" data-target="contact"></div>
        </a>
    </div>

    <div id="contact-modal" class="fixed inset-0 z-[60] hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="toggleModal()"></div>
        
        <div class="relative bg-white w-[90%] md:w-[35rem] p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(255,255,255,0.2)] modal-enter">
            <div class="flex justify-between items-center mb-8 border-b-2 border-black pb-4">
                <h3 class="text-4xl font-bebas tracking-wide">CONTACT INFO</h3>
                <button onclick="toggleModal()" class="text-2xl hover:text-red-600 transition font-bold">&times;</button>
            </div>

            <div class="space-y-6">
                <div class="flex items-center gap-4 p-4 border-2 border-gray-200 hover:border-black transition group bg-gray-50">
                    <div class="w-12 h-12 bg-black text-white flex items-center justify-center rounded-full text-xl group-hover:bg-red-600 transition">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <p class="text-xs text-gray-500 font-bold uppercase">Email Address</p>
                        <p class="font-bold text-lg truncate">ferdiyanto1517@gmail.com</p>
                    </div>
                    <button onclick="copyToClipboard('ferdiyanto1517@gmail.com')" class="text-sm border border-black px-3 py-1 hover:bg-black hover:text-white transition">
                        COPY
                    </button>
                </div>

                <div class="flex items-center gap-4 p-4 border-2 border-gray-200 hover:border-black transition group bg-gray-50">
                    <div class="w-12 h-12 bg-black text-white flex items-center justify-center rounded-full text-xl group-hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-xs text-gray-500 font-bold uppercase">WhatsApp</p>
                        <p class="font-bold text-lg">+62 898-6663-607</p>
                    </div>
                    <button onclick="copyToClipboard('+628986663607')" class="text-sm border border-black px-3 py-1 hover:bg-black hover:text-white transition mr-2">
                        COPY
                    </button>
                    <a href="https://wa.me/628986663607" target="_blank" class="text-sm bg-black text-white px-4 py-2 hover:bg-green-600 transition font-bold">
                        CHAT
                    </a>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                Silakan hubungi saya untuk kolaborasi atau penawaran kerja.
            </div>
        </div>
    </div>

    <section id="home" class="section-trigger relative z-40 min-h-screen flex flex-col md:flex-row items-center justify-center px-6 md:px-20 pt-20">
        <div class="w-full md:w-1/2 space-y-6 pt-10 md:pt-0 z-10">
            <h1 class="text-8xl md:text-9xl font-bebas leading-[0.85] text-black drop-shadow-lg" id="hero-name">
                FERDI<br>YANTO
            </h1>   
            <div class="bg-white/40 backdrop-blur-sm p-4 border-l-4 border-black max-w-md shadow-lg">
                <p class="text-gray-900 font-medium leading-relaxed">
                    Mahasiswa Informatika Semester 6 yang tertarik pada Machine Learning, Game Dev, Mobile App dan Web Design.
                </p>
            </div>
            <div class="py-2">
                <span class="text-4xl font-cursive text-gray-500 rotate-[-5deg] inline-block" style="font-family: 'Brush Script MT', cursive;">
                    Informatika
                </span>
            </div>
            <div class="flex gap-4">
                <button onclick="toggleModal()" class="bg-black text-white px-8 py-3 rounded-full font-bold hover:bg-red-600 transition duration-300">
                    CONTACT ME
                </button>
                <a href="/FERDIYANTO-cv.pdf" target="_blank" class="border-2 border-black px-8 py-3 rounded-full font-bold hover:bg-black hover:text-white transition duration-300">
                    VIEW CV
                </a>
            </div>
        </div>
        <div class="w-full md:w-1/2 h-full relative flex items-end justify-center">
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-red-600 rounded-full blur-[100px] opacity-30 -z-10"></div>
            <img src="/img/saya.png" alt="Ferdiyanto" class="h-[70vh] md:h-[85vh] object-contain object-bottom drop-shadow-2xl hover:scale-105 transition duration-500 ease-out z-10">
        </div>
    </section>

    <section id="projects" class="section-trigger relative z-40 px-6 md:px-20 py-24 border-t-4 border-black min-h-screen flex flex-col justify-center bg-white/80 backdrop-blur-sm">
        <div class="flex items-center gap-6 mb-16">
            <h2 class="text-7xl md:text-9xl font-bebas leading-none text-black">
                SELECTED<br>WORKS
            </h2>
            <div class="hidden md:block h-4 flex-1 bg-black"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto w-full">
            <div class="group border-4 border-black p-6 bg-white hover:-translate-y-2 hover:bg-red-50 transition-all duration-300 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-4xl font-bebas text-gray-400 group-hover:text-black transition">01</span>
                    <span class="bg-black text-white text-xs font-bold px-3 py-1 rounded-full">ANDROID</span>
                </div>
                <h3 class="text-3xl font-bold mb-3 uppercase leading-tight">CashFlow App</h3>
                <p class="text-gray-600 mb-6 font-medium text-sm">Aplikasi manajemen keuangan berbasis mobile.</p>
                <a href="https://github.com/Jexxy1517/CashFlowReportApp" target="_blank" class="inline-block border-2 border-black px-6 py-2 font-bold text-sm hover:bg-black hover:text-white transition">LIHAT GITHUB ↗</a>
            </div>
            <div class="group border-4 border-black p-6 bg-white hover:-translate-y-2 hover:bg-red-50 transition-all duration-300 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-4xl font-bebas text-gray-400 group-hover:text-black transition">02</span>
                    <span class="bg-black text-white text-xs font-bold px-3 py-1 rounded-full">ML / PYTHON</span>
                </div>
                <h3 class="text-3xl font-bold mb-3 uppercase leading-tight">Fake Review Detection</h3>
                <p class="text-gray-600 mb-6 font-medium text-sm">Deteksi ulasan palsu e-commerce menggunakan NLP.</p>
                <a href="https://github.com/Jexxy1517/Benchmarking-Classical-ML-Ensemble-Stacking-and-BERT-for-Fake-Review-Detection" target="_blank" class="inline-block border-2 border-black px-6 py-2 font-bold text-sm hover:bg-black hover:text-white transition">LIHAT GITHUB ↗</a>
            </div>
            <div class="group border-4 border-black p-6 bg-white hover:-translate-y-2 hover:bg-red-50 transition-all duration-300 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] hover:shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]">
                <div class="flex justify-between items-start mb-4">
                    <span class="text-4xl font-bebas text-gray-400 group-hover:text-black transition">03</span>
                    <span class="bg-black text-white text-xs font-bold px-3 py-1 rounded-full">GAME DEV</span>
                </div>
                <h3 class="text-3xl font-bold mb-3 uppercase leading-tight">PirateMiniGame</h3>
                <p class="text-gray-600 mb-6 font-medium text-sm">Game 3D platformer bertema bajak laut dengan mekanik unik.</p>
                <a href="https://github.com/Jexxy1517/PirateMiniGame" target="_blank" class="inline-block border-2 border-black px-6 py-2 font-bold text-sm hover:bg-black hover:text-white transition">LIHAT GITHUB ↗</a>
            </div>
        </div>
    </section>

    <section id="certificate" class="section-trigger relative z-40 px-6 md:px-20 py-24 min-h-[70vh] flex flex-col justify-center border-t-2 border-black bg-black/5">
         <div class="flex items-center gap-6 mb-10">
            <h2 class="text-6xl md:text-8xl font-bebas leading-none text-black opacity-80">
                CERTIFICATES
            </h2>
            <div class="h-1 flex-1 bg-black"></div>
        </div>
        
        <div class="flex flex-col items-center justify-center text-center space-y-8">
            <div class="w-32 h-32 bg-white border-4 border-black rounded-xl flex items-center justify-center shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <i class="fab fa-google-drive text-6xl text-black"></i>
            </div>
            
            <div class="max-w-3xl">
                <p class="text-xl md:text-2xl font-bold mb-4">
                    Semua sertifikat dan penghargaan saya tersimpan rapi di Google Drive.
                </p>
                <p class="text-gray-600 mb-8">
                    Termasuk sertifikat Game Development Bootcamp, Python, SQL, R Fundamental, serta sertifikasi HCIA AI & openGauss.
                </p>
                
                <a href="https://drive.google.com/drive/folders/18U_NJWlvWTmdX3HjNgAvSQUZxKT8gwZ8?usp=sharing" 
                   target="_blank" 
                   class="inline-block bg-black text-white px-10 py-4 rounded-full font-bold text-xl hover:bg-green-600 hover:scale-105 transition duration-300 shadow-xl">
                    <i class="fab fa-google-drive mr-2"></i> BUKA GOOGLE DRIVE
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="section-trigger relative z-40 px-6 md:px-20 py-24 bg-black text-white border-t-4 border-red-600 min-h-[80vh] flex flex-col justify-center">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <h2 class="text-6xl md:text-9xl font-bebas leading-none">
                LET'S WORK <span class="text-red-500">TOGETHER</span>
            </h2>
            <p class="text-gray-400 text-lg md:text-xl">
                Tertarik berkolaborasi atau ingin merekrut saya? Hubungi saya sekarang.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-6 mt-10">
                <button onclick="toggleModal()" class="px-8 py-4 bg-white text-black font-bold text-xl rounded-full hover:bg-red-600 hover:text-white transition duration-300">
                    ✉️ Contact Me
                </button>
                <a href="https://www.linkedin.com/in/ferdiyanto-68509b28a" target="_blank" class="px-8 py-4 border-2 border-white font-bold text-xl rounded-full hover:bg-white hover:text-black transition duration-300">
                    LinkedIn
                </a>
                <a href="https://github.com/Jexxy1517" target="_blank" class="px-8 py-4 border-2 border-white font-bold text-xl rounded-full hover:bg-white hover:text-black transition duration-300">
                    GitHub
                </a>
            </div>
            <footer class="mt-20 pt-10 border-t border-gray-800 text-sm text-gray-500">
                &copy; 2026 Ferdiyanto. All Rights Reserved.
            </footer>
        </div>
    </section>

    <script>
        const navbar = document.getElementById('navbar');
        const navName = document.getElementById('nav-name');
        const sections = document.querySelectorAll('.section-trigger');
        const navLinks = document.querySelectorAll('.nav-link');
        const sideDots = document.querySelectorAll('.side-dot');

        function toggleModal() {
            const modal = document.getElementById('contact-modal');
            modal.classList.toggle('hidden');
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('Berhasil disalin: ' + text);
            });
        }

        function updateActiveState() {
            let current = "";
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('bg-black', 'text-white');
                if (link.getAttribute('data-target') === current) {
                    link.classList.add('bg-black', 'text-white');
                }
            });

            sideDots.forEach(dot => {
                dot.classList.remove('bg-black', 'scale-125', 'ring-2', 'ring-black');
                dot.classList.add('bg-gray-400');
                if (dot.getAttribute('data-target') === current) {
                    dot.classList.remove('bg-gray-400');
                    dot.classList.add('bg-black', 'scale-125', 'ring-2', 'ring-black');
                }
            });
        }

        window.addEventListener('scroll', () => {
            updateActiveState();
            if (window.scrollY > 100) {
                navName.classList.remove('w-0', 'opacity-0');
                navName.classList.add('w-auto', 'opacity-100', 'pl-3');
            } else {
                navName.classList.add('w-0', 'opacity-0');
                navName.classList.remove('w-auto', 'opacity-100', 'pl-3');
            }
        });
        updateActiveState();
    </script>
</body>
</html>