<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    style="background-image: url('{{ asset('assets/images/user/bg.png') }}'); background-size: cover; background-position: center;">
    <div class="h-screen flex items-center justify-center">
        <!-- Card Container -->
        <div class="bg-white shadow-lg rounded-2xl p-8 max-w-lg w-full max-h-fit py-16">
            <h4 class="text-2xl font-bold mb-2 text-text text-center">Daftar User</h4>
            <p class="text-text mb-6 text-center">Masukkan detail akun anda untuk mendaftar</p>

            <form action="{{ route('register.store') }}" method="post">
                @csrf

                <!-- Nama Input -->
                <div class="mb-4">
                    <label for="name" class="block font-medium text-text">Nama</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-lg @error('name') border-red-500 @enderror"
                        placeholder="Masukkan nama" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block font-medium text-text">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-lg @error('email') border-red-500 @enderror"
                        placeholder="Masukkan email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block font-medium text-text">Password</label>
                    <input type="password" id="password" name="password"
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-lg @error('password') border-red-500 @enderror"
                        placeholder="Masukkan password">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Password Input -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block font-medium text-text">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="mt-1 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-primary focus:border-primary sm:text-lg"
                        placeholder="Konfirmasi password">
                </div>

                <!-- Button Container -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 text-lg">
                        Daftar
                    </button>
                    <p class="mt-4 text-center text-text">
                        Sudah memiliki akun?
                        <a href="{{ route('login') }}" class="text-primary font-medium hover:underline">Masuk</a>
                    </p>
                </div>

            </form>
        </div>
    </div>

    {{-- Menggunakan script blade untuk menyamakan desain --}}
    @include('admin.includes.script')
</body>

</html>
