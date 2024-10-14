<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-body">
    {{-- Navbar --}}
    <nav class="py-8 bg-white">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a href="#" class="max-w-48 lg:max-w-54 xl:max-w-64 2xl:max-w-72"><img
                    src="{{ asset('assets/images/user/logo.svg') }}" alt="Logo">
            </a>
            <button class="lg:hidden block text-text focus:outline-none" id="navbar-toggler">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="hidden lg:flex lg:items-center gap-8">
                <a href="#" class="text-primary fw-bold py-2 rounded text-lg">Cari Lowongan</a>
                <div class="lg:flex lg:items-center gap-2">
                    <a href="/profile" class="text-white px-4 py-3 bg-primary rounded-md ">Lihat Profil</a>
                    <a href="#" class="text-text px-4 py-3 border border-primary rounded-md"><img
                            src="{{ asset('assets/images/user/user.svg') }}" alt="user" class="w-full"></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container mx-auto px-4 mt-10">
        <div class="mt-4 flex flex-col md:flex-row gap-4 items-start">
            <div class="w-full md:w-2/5 grid gap-4">
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <div class="flex gap-4 items-center">
                        <img src="{{ asset('assets/images/user/Frame 77.svg') }}" alt="Bag">
                        <div class="space-y-1">
                            <h1 class="font-bold text-2xl">Your Name</h1>
                            <p>example@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-3 bg-white p-6 rounded-lg border">
                    <a href="#data-diri">
                        <div class="flex gap-3 items-start p-4 bg-primary rounded-lg">
                            <img src="{{ asset('assets/images/user/Message.svg') }}" alt="Bag">
                            <div>
                                <p class="font-semibold mb-1 text-white">Data Diri</p>
                            </div>
                        </div>
                    </a>
                    <a href="#pengaturan-akun">
                        <div class="flex gap-3 items-start p-4 border border-text rounded-lg">
                            <img src="{{ asset('assets/images/user/Lock.svg') }}" alt="Bag">
                            <div>
                                <p class="font-semibold mb-1 text-text">Pengaturan Akun</p>
                            </div>
                        </div>
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left">
                            <div class="flex gap-3 items-start p-4 border border-text rounded-lg">
                                <img src="{{ asset('assets/images/user/Arrow - Right.svg') }}" alt="Bag">
                                <div>
                                    <p class="font-semibold mb-1 text-text">Logout</p>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>

            <div class="w-full lg:w-3/5 flex flex-col gap-4">
                <div class="bg-white px-8 py-8 rounded-lg border">
                    <h2 class="text-3xl font-semibold mb-3">Upload CV Mu Disini</h2>
                    <form class="flex gap-4">
                        <div class="flex-grow">
                            <input id="posisi" name="posisi" type="text"
                                class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                placeholder="Posisi">
                        </div>
                        <div class="w-auto">
                            <button type="submit"
                                class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}" alt="Search"
                                    class="w-7 h-7">
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white px-8 py-10 rounded-lg border">
                    <div class="flex gap-8 border-b border-gray-300 pb-3">
                        <label class="cursor-pointer pb-2 text-lg">
                            Data Pribadi
                        </label>
                        <label class="cursor-pointer text-primary pb-2 font-bold text-lg">
                            Dokumen Lainnya
                        </label>
                    </div>

                    <form class="grid gap-6 mt-6">
                        <div class="flex flex-col gap-6">
                            <div>
                                <h2 class="text-lg font-semibold mb-2">Kelengkapan Dokumen</h2>
                                <p>Lengkapi dokumen untuk mempermudah proses pendaftaraan magang.</p>
                            </div>
                            <div class="grid md:grid-cols-1 gap-2">
                                <h2 class="text-lg font-semibold">Pakta Integritas</h2>
                                <div class="flex gap-4">
                                    <form class="flex gap-4">
                                        <div class="flex-grow">
                                            <input id="posisi" name="posisi" type="text"
                                                class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                                placeholder="Upload Disini">
                                        </div>
                                        <div class="w-auto">
                                            <button type="submit"
                                                class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                                <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                    alt="Search" class="w-7 h-7">
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Portfolio</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="portfolio" name="portfolio" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Ijazah/Surat Keterangan Lulus (bagi Fresh
                                    Graduate)</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">KTP</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="ktp" name="ktp" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Surat Rekomendasi dari Universitas</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="surat-rekomendasi" name="surat_rekomendasi" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Rapor</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="rapor" name="rapor" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Sertifikat</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="sertifikat" name="sertifikat" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Transkrip</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="transkrip" name="transkrip" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"
                                            placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">KTM</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="ktm" name="ktm" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm "placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Input Dokumen Lainnya -->
                            <div class="grid md:grid-cols-1 gap-4">
                                <h2 class="text-lg font-semibold">Dokumen Lainnya</h2>
                                <div class="flex gap-4">
                                    <div class="flex-grow">
                                        <input id="dokumen-lain" name="dokumen-lain" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm"placeholder="Upload Disini">
                                    </div>
                                    <div class="w-auto">
                                        <button type="submit"
                                            class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                            <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}"
                                                alt="Upload" class="w-7 h-7">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-3">
                                <button type="submit"
                                    class="bg-primary text-white px-4 py-3 rounded-lg hover:bg-opacity-90 w-full">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>


    <footer class="bg-red-600 text-white pt-12 mt-20">
        <div class="container mx-auto px-4">
            <h2 class="font-bold text-4xl mb-8 text-left">Magang Telkomsel</h2>
            <div class="flex flex-col md:flex-row gap-10 justify-start mb-10">
                <div class="w-full md:w-6/12">
                    <p class="mb-4 leading-relaxed">
                        PT FHCI Prima Unggul<br>
                        Plaza Mandiri Lt.28, Jl. Jend. Gatot Subroto Kav. 36-38, Jakarta 12190
                    </p>
                    <p>Email: <a href="mailto:hi@magentaku.id" class="underline">hi@magentaku.id</a></p>
                    <div class="flex py-4 gap-2">
                        <img src="{{ asset('assets/images/user/ri_instagram-fill.svg') }}" alt="Instagram"
                            class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/mdi_linkedin.svg') }}" alt="LinkedIn"
                            class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/prime_twitter.svg') }}" alt="Twitter"
                            class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/mdi_youtube.svg') }}" alt="YouTube" class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/mdi_facebook.svg') }}" alt="Facebook"
                            class="w-6 h-6">
                    </div>
                </div>

                <div class="w-full md:w-3/12">
                    <h2 class="font-bold text-lg mb-3">Peserta</h2>
                    <p><a href="#" class="hover:underline">Cari Lowongan</a></p>
                </div>

                <div class="w-full md:w-3/12">
                    <h2 class="font-bold text-lg mb-4">Pusat Informasi</h2>
                    <p class="mb-4"><a href="#" class="hover:underline">Panduan</a></p>
                    <p class="mb-4">Email: <a href="mailto:hi@magentaku.id" class="underline">hi@magentaku.id</a>
                    </p>
                    <p><a href="#" class="hover:underline">Tentang Kami</a></p>
                </div>
            </div>

            <div class="border-t border-gray-400 py-8 text-right">
                <p>© 2024 MAGENTA BUMN. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
