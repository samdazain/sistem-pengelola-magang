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




    <section class="container mx-auto px-4 mt-6">

        <div class="mt-4 flex flex-col justify-center lg:flex-row gap-4 items-center">
            <div class="w-full mx-auto  ">
                <div class="w-full lg:w-3/5 mx-auto flex flex-col bg-white px-8 py-8 rounded-lg border gap-4">
                    <div class="flex items-center gap-2 lg:gap-8">
                        <div class="w-9/12">
                            <h2 class="text-2xl md:text-3xl font-semibold mb-3">{{$job->title}}
                            </h2>
                            <div class="flex gap-2 items-center">
                                <img src="{{ asset('assets/images/user/‌Bag - 2.svg') }}" alt="Bag">
                                <p>{{$job->location}}</p>
                            </div>
                        </div>
                        <div class="w-3/12  bg-white">
                            <div class="grid gap-4">

                                <p class="text-primary">{{$job->quota}} Posisi • 37 Pelamar</p>
                                <div class="rounded-lg bg-primary">
                                    <p class="text-white font-semibold px-4 py-3 text-center">Daftar Sekarang</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="mt-4 text-xl font-bold pb-4 border-b-2 border-primary">Deskripsi Lowongan</h3>
                    <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                        <img src="{{ asset('assets/images/user/Shield - check.svg') }}" alt="Bag">
                        <div>
                            <p class="font-semibold mb-1">Sertifikat</p>
                            <p>Kamu akan mendapatkan sertifikat yang dijamin oleh Telkomsel</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                        <img src="{{ asset('assets/images/user/Bag.svg') }}" alt="Bag">
                        <div>
                            <p class="font-semibold mb-1">Pendidikan</p>
                            <p>Jurusan: {{$job->education}}</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                        <img src="{{ asset('assets/images/user/Document.svg') }}" alt="Bag">
                        <div>
                            <p class="font-semibold mb-1">Persyaratan Dokumen</p>
                            <p>Berkas: CV, FC KTP, FC KK, transkrip (lengkapi halaman profile)</p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                        <img src="{{ asset('assets/images/user/Todo.svg') }}" alt="Bag">
                        <div class="grid gap-1">
                            <p class="font-semibold mb-1">Tanggal Penting</p>
                            <p>&#8226; Durasi: {{$job->duration}} bulan</p>
                            <p>&#8226; Penutupan lamaran: {{$job->formatted_closing_date}}</p>
                            <p>&#8226; Pengumuman lolos seleksi: {{$job->formatted_announcement_date}}</p>
                        </div>
                    </div>
                    <div class="gap-3 items-start pt-1 pb-4 border-b-2 border-gray-200">
                        <p class="font-semibold">Rincian Lowongan</p>
                        <div class="grid mt-1 gap-1">
                            {!!$job->requirements !!}
                        </div>
                    </div>

                </div>

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
                        <img src="{{ asset('assets/images/user/mdi_linkedin.svg') }}" alt="LinkedIn" class="w-6 h-6">
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
