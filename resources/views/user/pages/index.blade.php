<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">
    {{-- Navbar --}}
    <nav class="py-8 bg-white">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a href="#" class="max-w-48 lg:max-w-54 xl:max-w-64 2xl:max-w-72">
                <img src="{{ asset('assets/images/user/logo.svg') }}" alt="Logo">
            </a>

            <button class="lg:hidden block text-text focus:outline-none" id="navbar-toggler">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="hidden lg:flex lg:items-center gap-8">
                <a href="#" class="text-gray-500 fw-bold py-2 rounded text-lg">Cari Lowongan</a>
                <div class="lg:flex lg:items-center gap-2">
                    <a href="/login" class="text-white px-6 py-3 bg-primary rounded-md ">Login</a>
                    <a href="/register"
                        class="text-primary px-6 py-3 bg-white rounded-md border border-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container mx-auto lg:py-20 py-0 pb-14 px-4">
        <div class="bg-white grid grid-cols-1 md:grid-cols-6 gap-0 sm:gap-4 justify-between items-center">
            <!-- Responsive pada ukuran kecil dan besar -->
            <div class="col-span-1 md:col-span-3 order-2 md:order-1">
                <h1 class="text-3xl lg:text-5xl font-bold max-w-md mb-4 md:mb-8">
                    Temukan Kesempatan Baru <span class="text-primary">Sekarang!</span>
                </h1>
                <p class="text-base md:text-lg mb-4 md:mb-8">
                    Bergabung dengan Telkomsel Hari ini dan temukan karir yang sesuai dengan anda
                </p>
                <a href="#about"
                    class="flex items-center w-fit bg-primary hover:bg-primary-dark text-white font-bold py-2 px-6 md:px-8 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 text-base md:text-lg mb-4 md:mb-8">
                    Tentang Telkomsel
                    <img src="{{ asset('assets/images/user/Arrow.svg') }}" alt="" class="w-6 md:w-10 ms-2">
                </a>
            </div>
            <div class="col-span-1 md:col-span-3 flex items-center justify-end order-1 md:order-2">
                <img src="{{ asset('assets/images/user/Frame 33.png') }}" alt=""
                    class="w-full sm:w-full md:max-w-full">
            </div>
        </div>
    </section>

    <section id="about" class="bg-primary py-16 md:py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-4 md:gap-8 items-center">
                <div class="col-span-1 md:col-span-3 order-1 md:order-1">
                    <img src="{{ asset('assets/images/user/img-about.png') }}" alt=""
                        class="w-full md:max-w-full">
                </div>
                <div class="col-span-1 md:col-span-3 order-2 md:order-2">
                    <p class="leading-relaxed mb-4 text-white">
                        Kementerian BUMN dan Forum Human Capital Indonesia (FHCI) bersinergi dengan seluruh BUMN di
                        Indonesia untuk
                        dapat memberikan kesempatan magang bagi mahasiswa dan fresh graduate baik lulusan dalam negeri
                        maupun luar
                        negeri.
                    </p>
                    <p class="leading-relaxed mb-4 text-white">
                        Magang Generasi Bertalenta (MAGENTA) BUMN adalah program magang terpadu bagi santri, mahasiswa
                        dan fresh
                        graduate untuk mengaplikasikan semua ilmu yang telah didapat dengan cara mempraktekkan secara
                        langsung di dunia
                        kerja sehingga mendapatkan tambahan pengetahuan dan skill tentang standar kerja profesional di
                        BUMN.
                    </p>
                    <p class="leading-relaxed text-white">
                        Pengalaman yang didapat dari program MAGENTA BUMN akan menjadi bekal berharga dalam menjalani
                        jenjang karir
                        sesungguhnya untuk meraih masa depan gemilang.
                    </p>
                    <a href="/job-vacancy"
                        class="inline-flex items-center w-fit bg-white hover:bg-primary-dark text-primary font-bold py-2 px-6 md:px-7 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 text-base md:text-lg mt-4 md:mt-8">
                        Cari Lowongan
                        <img src="{{ asset('assets/images/user/Arrow -.svg') }}" alt=""
                            class="w-6 md:w-10 ms-2">
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>


</html>
