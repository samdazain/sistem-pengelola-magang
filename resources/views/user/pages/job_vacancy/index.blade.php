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
        <div class="container mx-auto flex items-center justify-between">
            <a href="#" class="max-w-54"><img src="{{ asset('assets/images/user/logo.svg') }}" alt="Logo">
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


    <section class="container mx-auto mt-10">
        <div class="bg-white rounded-lg border stroke-neutralLight ">
            <div class="px-4 py-8">
                <h1 class="text-4xl font-bold">Temukan Karir Impianmu</h1>
            </div>
        </div>

        <div class="mt-6 px-4 py-10 bg-white rounded-lg border">
            <form class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <!-- Input Posisi -->
                <div class="lg:col-span-1 flex-grow">
                    <input type="text" name="posisi" id="posisi" placeholder="Posisi"
                        class="block w-full h-12 px-4 rounded-md border border-gray-300 shadow-sm text-gray-900 placeholder-gray-400 sm:text-sm">
                </div>

                <!-- Select Jurusan -->
                <div class="lg:col-span-1 flex-grow">
                    <select id="jurusan" name="jurusan"
                        class="block w-full h-12 px-4 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm">
                        <option selected disabled>Jurusan</option>
                        <option>Teknik Informatika</option>
                        <option>Sistem Informasi</option>
                        <option>Manajemen</option>
                        <option>Akuntansi</option>
                    </select>
                </div>

                <!-- Select Jenjang -->
                <div class="lg:col-span-1 flex-grow">
                    <select id="jenjang" name="jenjang"
                        class=" block w-full h-12 px-4 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 sm:text-sm">
                        <option selected disabled>Jenjang</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                </div>

                <!-- Tombol Search -->
                <div class="lg:col-end-5 flex justify-end">
                    <button type="submit"
                        class="w-18 h-12 bg-primary text-white py-2 px-4 rounded-md flex items-center justify-center hover:bg-opacity-90">
                        <img src="{{ asset('assets/images/user/Search.svg') }}" alt="Search" class="w-full">
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="container mx-auto mt-6">
        <p>Total Posisi: 53 Total Perusahaan: 15 Total Job: 26</p>

        <div class="mt-4 flex gap-4 items-start">
            <div class="w-2/5  grid gap-4">
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <h2 class="text-2xl font-semibold">Internship Indirect Procurement - Strategic Construction</h2>
                    <p class="text-primary  mb-1">1 Posisi . 37 Pelamar</p>
                    <div class="flex gap-4 mb-3">
                        <div class="border border-textAccent rounded-md bg-accent">
                            <p class="text-textAccent font-semibold px-4 py-2 ">Magang Umum</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">6 Bulan</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">Onsite</p>
                        </div>
                    </div>
                    <p class="text-text border-t pt-3">Penutupan : <span class="text-primary">5 Oktober 2024</span></p>
                </div>
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <h2 class="text-2xl font-semibold">Internship Indirect Procurement - Strategic Construction</h2>
                    <p class="text-primary  mb-1">1 Posisi . 37 Pelamar</p>
                    <div class="flex gap-4 mb-3">
                        <div class="border border-textAccent rounded-md bg-accent">
                            <p class="text-textAccent font-semibold px-4 py-2 ">Magang Umum</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">6 Bulan</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">Onsite</p>
                        </div>
                    </div>
                    <p class="text-text border-t pt-3">Penutupan : <span class="text-primary">5 Oktober 2024</span></p>
                </div>
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <h2 class="text-2xl font-semibold">Internship Indirect Procurement - Strategic Construction</h2>
                    <p class="text-primary  mb-1">1 Posisi . 37 Pelamar</p>
                    <div class="flex gap-4 mb-3">
                        <div class="border border-textAccent rounded-md bg-accent">
                            <p class="text-textAccent font-semibold px-4 py-2 ">Magang Umum</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">6 Bulan</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">Onsite</p>
                        </div>
                    </div>
                    <p class="text-text border-t pt-3">Penutupan : <span class="text-primary">5 Oktober 2024</span></p>
                </div>
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <h2 class="text-2xl font-semibold">Internship Indirect Procurement - Strategic Construction</h2>
                    <p class="text-primary  mb-1">1 Posisi . 37 Pelamar</p>
                    <div class="flex gap-4 mb-3">
                        <div class="border border-textAccent rounded-md bg-accent">
                            <p class="text-textAccent font-semibold px-4 py-2 ">Magang Umum</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">6 Bulan</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">Onsite</p>
                        </div>
                    </div>
                    <p class="text-text border-t pt-3">Penutupan : <span class="text-primary">5 Oktober 2024</span>
                    </p>
                </div>
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <h2 class="text-2xl font-semibold">Internship Indirect Procurement - Strategic Construction</h2>
                    <p class="text-primary  mb-1">1 Posisi . 37 Pelamar</p>
                    <div class="flex gap-4 mb-3">
                        <div class="border border-textAccent rounded-md bg-accent">
                            <p class="text-textAccent font-semibold px-4 py-2 ">Magang Umum</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">6 Bulan</p>
                        </div>
                        <div class="border border-gray-400 bg-gray-200 rounded-md">
                            <p class="text-text px-4 py-2 ">Onsite</p>
                        </div>
                    </div>
                    <p class="text-text border-t pt-3">Penutupan : <span class="text-primary">5 Oktober 2024</span>
                    </p>
                </div>
                <div class="flex gap-4 mt-2">
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-primary text-white rounded-full">
                        1</p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        2
                    </p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        3
                    </p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        ...
                    </p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        7
                    </p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        &gt;</p>
                    <p
                        class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                        &gt;&gt;</p>
                </div>
            </div>


            <div class="w-3/5 flex flex-col bg-white px-8 py-8 rounded-lg border gap-4">
                <div class="flex items-center gap-8">
                    <div class="w-9/12">
                        <h2 class="text-3xl font-semibold mb-3">Internship Indirect Procurement - Strategic
                            Construction</h2>
                        <div class="flex gap-2">
                            <img src="{{ asset('assets/images/user/‌Bag - 2.svg') }}" alt="Bag">
                            <p>Onsite</p>
                        </div>
                    </div>
                    <div class="w-3/12 bg-white">
                        <div class="grid gap-4">
                            <div class="border border-textAccent rounded-lg bg-accent">
                                <p class="text-textAccent font-semibold px-4 py-3 text-center">Magang Umum</p>
                            </div>
                            <p class="text-primary">1 Posisi • 37 Pelamar</p>
                            <div class="rounded-lg bg-primary">
                                <p class="text-white font-semibold px-4 py-3 text-center">Daftar Sekarang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-4 text-xl font-bold pb-4 border-b-2 border-primary">Deskripsi Lowongan</h3>
                <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                    <img src="{{ asset('assets/images/user/Shield - check.svg') }}" alt="Bag">
                    <div class="">
                        <p class="font-semibold mb-1">Sertifikat</p>
                        <p>Kamu akan mendapatkan sertifikat yang dijamin oleh Kementerian BUMN</p>
                    </div>
                </div>
                <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                    <img src="{{ asset('assets/images/user/Bag.svg') }}" alt="Bag">
                    <div class="">
                        <p class="font-semibold mb-1">Pendidikan</p>
                        <p>Jurusan: Teknik Sipil, Teknik Kelistrikan, Teknik Elektro.</p>
                    </div>
                </div>
                <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                    <img src="{{ asset('assets/images/user/Document.svg') }}" alt="Bag">
                    <div class="">
                        <p class="font-semibold mb-1">Persyaratan Dokumen</p>
                        <p>Berkas: CV, FC KTP, FC KK, transkrip</p>
                    </div>
                </div>
                <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                    <img src="{{ asset('assets/images/user/Todo.svg') }}" alt="Bag">
                    <div class="grid gap-1">
                        <p class="font-semibold mb-1">Tanggal Penting</p>
                        <p>&#8226; Durasi: 6 bulan</p>
                        <p>&#8226; Penutupan lamaran: 5 Oktober 2024</p>
                        <p>&#8226; Pengumuman lolos seleksi: 13 Oktober 2024</p>
                    </div>
                </div>
                <div class=" gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                    <p class="font-semibold">Rincian Lowongan</p>
                    <div class="grid mt-1 gap-1">
                        <p>1. Mahasiswa/i aktif S1 Teknik Sipil, Teknik kelistrikan, Teknik elektro
                        </p>
                        <p>2. Mampu mengolah data menggunakan rumus dan pivot dengan microsoft excel</p>
                        <p>3. Mampu membuat report dengan power point, canva dsb</p>
                        <p>4. Mengetahui informasi terkait proses pengadaan secara umum</p>
                        <p>5. mampu membantu melakukan proses administrative pengadaan; melakukan evaluasi teknis
                            pengadaan konstruksi dan mechanical electrical; memahami dan membantu dalam perencanaan
                            pengadaan terkait</p>
                        <p>6. Penempatan di jakarta pusat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-red-600 text-white pt-12 mt-20">
        <h2 class="container mx-auto font-bold text-4xl mb-8 ">Magang Telkomsel</h2>
        <div class="container mx-auto flex gap-20 justify-between mb-10">
            <div class="w-6/12">
                <p class="mb-4 leading-relaxed">PT FHCI Prima Unggul<br>Plaza Mandiri Lt.28, Jl. Jend. Gatot Subroto
                    Kav.
                    36-38.
                    Jakarta 12190</p>
                <p>Email: hi@magentaku.id</p>
                <div class="flex py-4 gap-2">
                    <img src="{{ asset('assets/images/user/ri_instagram-fill.svg') }}" alt="Bag">
                    <img src="{{ asset('assets/images/user/mdi_linkedin.svg') }}" alt="Bag">
                    <img src="{{ asset('assets/images/user/prime_twitter.svg') }}" alt="Bag">
                    <img src="{{ asset('assets/images/user/mdi_youtube.svg') }}" alt="Bag">
                    <img src="{{ asset('assets/images/user/mdi_facebook.svg') }}" alt="Bag">
                </div>
            </div>

            <div class="w-3/12">
                <h2 class="font-bold text-lg mb-3">Peserta</h2>
                <p><a href="#" class="hover:underline">Cari Lowongan</a></p>
            </div>

            <div class="w-3/12">
                <h2 class="font-bold text-lg mb-4">Pusat Informasi</h2>
                <p class="mb-4"><a href="#" class="hover:underline">Panduan</a></p>
                <p class="mb-4">Email: <a href="mailto:hi@magentaku.id" class="underline ">hi@magentaku.id</a></p>
                <p class=""><a href="#" class="hover:underline">Tentang Kami</a></p>
            </div>
        </div>

        <div class="container mx-auto border-t border-gray-400 py-8 text-center">
            <p>© 2024 MAGENTA BUMN. All rights reserved</p>
        </div>
    </footer>

    {{-- <div class="d-grid mt-3">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div> --}}
</body>

</html>
