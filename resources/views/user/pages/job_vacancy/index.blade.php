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


    <section class="container mx-auto px-4 mt-6 sm:mt-10 lg:w-3/5">
        <div class="bg-white rounded-lg border stroke-neutralLight ">
            <div class="px-4 py-8">
                <h1 class="text-4xl font-bold">Temukan Karir Impianmu</h1>
            </div>
        </div>

        <div class="mt-6 px-4 py-10 bg-white rounded-lg border">
            <form class="grid grid-cols-1 lg:grid-cols-3 gap-4">
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

    <section class="container mx-auto px-4 mt-6">
        <p class="text-center">Total Posisi: 53 Total Perusahaan: 15 Total Job: 26</p>

        <div class="mt-4 flex flex-col justify-center lg:flex-row gap-4 items-start">
            <div class="w-full lg:w-3/5 grid gap-4">
                @foreach ($jobs as $job)
                <a href="{{ route('job.detail', $job->id) }}">
                    <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                        <h2 class="text-2xl font-semibold">{{ $job->title }}</h2>
                        <p class="text-primary mb-1">{{ $job->quota }} Posisi . 37 Pelamar</p>
                        <div class="flex gap-4 mb-3 flex-wrap">
                            <div class="border border-gray-400 bg-gray-200 rounded-md">
                                <p class="text-text px-4 py-2">{{ $job->duration }} bulan</p>
                            </div>
                            <div class="border border-gray-400 bg-gray-200 rounded-md">
                                <p class="text-text px-4 py-2">{{ $job->location }}</p>
                            </div>
                        </div>
                        <p class="text-text border-t pt-3">Penutupan: <span
                                class="text-primary">{{ $job->formatted_closing_date }}</span></p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <!-- Pagination Section -->
        <div class="flex flex-wrap gap-4 mt-4 justify-center">
            <!-- Previous Page Link -->
            @if ($jobs->onFirstPage())
            <span
                class="w-12 h-12 flex items-center justify-center font-extrabold bg-gray-200 text-gray-400 rounded-full">&lt;&lt;</span>
            @else
            <a href="{{ $jobs->url(1) }}"
                class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">&lt;&lt;</a>
            <a href="{{ $jobs->previousPageUrl() }}"
                class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">&lt;</a>
            @endif

            <!-- Page Number Links -->
            @foreach (range(1, $jobs->lastPage()) as $page)
            @if ($page == $jobs->currentPage())
            <span
                class="w-12 h-12 flex items-center justify-center font-extrabold bg-primary text-white rounded-full">{{ $page }}</span>
            @elseif ($page == 1 || $page == $jobs->lastPage() || abs($page - $jobs->currentPage()) < 2) <a
                href="{{ $jobs->url($page) }}"
                class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                {{ $page }}</a>
                @elseif ($page == 2 || $page == $jobs->lastPage() - 1)
                <span
                    class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">...</span>
                @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($jobs->hasMorePages())
                <a href="{{ $jobs->nextPageUrl() }}"
                    class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">&gt;</a>
                <a href="{{ $jobs->url($jobs->lastPage()) }}"
                    class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">&gt;&gt;</a>
                @else
                <span
                    class="w-12 h-12 flex items-center justify-center font-extrabold bg-gray-200 text-gray-400 rounded-full">&gt;&gt;</span>
                @endif
        </div>
        <!-- <div class="flex flex-wrap gap-4 mt-4 justify-center">
            {{ $jobs->links('pagination::tailwind') }}
        </div> -->
        <!-- <div class="flex flex-wrap gap-4 mt-4 justify-center">
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-primary text-white rounded-full">1
            </p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">2</p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">3</p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">...
            </p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">7</p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">&gt;
            </p>
            <p class="w-12 h-12 flex items-center justify-center font-extrabold bg-white text-text rounded-full">
                &gt;&gt;</p>
        </div> -->
        <!-- Pagination Section-->

    </section>

    <!-- Footer Section -->
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
                        <img src="{{ asset('assets/images/user/prime_twitter.svg') }}" alt="Twitter" class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/mdi_youtube.svg') }}" alt="YouTube" class="w-6 h-6">
                        <img src="{{ asset('assets/images/user/mdi_facebook.svg') }}" alt="Facebook" class="w-6 h-6">
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
    <!-- Footer Section -->
</body>

</html>