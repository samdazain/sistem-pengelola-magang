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
                    <a href="#" class="text-white px-4 py-3 bg-primary rounded-md ">Lihat Profil</a>
                    <a href="#" class="text-text px-4 py-3 border border-primary rounded-md"><img
                            src="{{ asset('assets/images/user/user.svg') }}" alt="user" class="w-full"></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="container mx-auto mt-10">
        <div class="mt-4 flex gap-4 items-start">
            <div class="w-2/5  grid gap-4">
                <div class="grid gap-2 bg-white px-5 py-6 rounded-lg border">
                    <div class="flex gap-4 items-center">
                        <img src="{{ asset('assets/images/user/Frame 77.svg') }}" alt="Bag">
                        <div class=""> <!-- Tambahkan space-y-1 -->
                            <h1 class="font-bold text-2xl">Your Name</h1>
                            <p class="">example@gmail.com</p>
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


            <div class="w-3/5 flex flex-col gap-4">
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
                    <!-- Tab Headers -->
                    <div class="flex gap-8 border-b border-gray-300 pb-3">
                        <label class="cursor-pointer text-primary font-bold pb-2 text-lg">
                            Data Pribadi
                        </label>

                        <label class="cursor-pointer pb-2 text-lg">
                            Dokumen Lainnya
                        </label>
                    </div>
                    <form class="grid gap-6 mt-6">
                        <!-- Daftar dokumen -->
                        <div class="flex flex-col gap-6">
                            <!-- Dokumen Item -->
                            <div>
                                <h2 class="text-lg font-semibold mb-2">Foto Profil</h2>
                                <div class="flex gap-4">
                                    <input id="pakta-integritas" name="pakta-integritas" type="text"
                                        class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                        placeholder="Upload Disini">
                                    <button type="submit"
                                        class="h-14 w-14 bg-primary text-white rounded-md flex items-center justify-center hover:bg-opacity-90">
                                        <img src="{{ asset('assets/images/user/Arrow - Bottom.svg') }}" alt="Upload"
                                            class="w-7 h-7">
                                    </button>
                                </div>
                            </div>

                            <div>
                                <h2 class="text-lg font-semibold mb-2">Tentang Saya</h2>
                                <div class="flex gap-4">
                                    <textarea id="portfolio" name="portfolio"
                                        class="block w-full h-28 pt-4 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                        placeholder="Tulis Disini" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">NIK</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Jenis Kelamin</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Tempat Lahir</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Kota Lahir</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Tanggal Lahir</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Email</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">No Whatsapp</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-lg font-semibold -mb-4">Alamat</h2>
                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Provinsi</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Kota/Kabupaten</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="text-lg font-semibold mb-2">Detail Alamat</h2>
                                <div class="flex gap-4">
                                    <textarea id="portfolio" name="portfolio"
                                        class="block w-full h-28 pt-4 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                        placeholder="Tulis Disini" rows="6"></textarea>
                                </div>
                            </div>

                            <h2 class="text-lg font-semibold -mb-4">Sosial Media</h2>
                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">LinkedIn</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Instagram</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Youtube</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Tiktok</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">X</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                                <div class="w-6/12">
                                    <h2 class="text-lg font-semibold mb-2">Facebook</h2>
                                    <div class="flex gap-4">
                                        <input id="ijazah" name="ijazah" type="text"
                                            class="block w-full h-14 px-5 rounded-md border border-gray-300 shadow-sm text-gray-400 focus:text-gray-900 text-base"
                                            placeholder="Tulis Disini">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Simpan -->
                        <div>
                            <button type="submit"
                                class="h-14 w-full bg-primary text-white rounded-md hover:bg-opacity-90">
                                Simpan
                            </button>
                        </div>
                    </form>

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
