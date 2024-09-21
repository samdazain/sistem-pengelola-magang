<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    {{-- Menggunakan style blade untuk menyamakan desain --}}
    @include('includes.style')

    <style>
        .register-card {
            max-width: 480px;
            /* Lebar maksimum kartu */
        }

        .full {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="full d-flex justify-content-center align-items-center">
        <div class="register-card card">
            <div class="card-body">

                <form action="{{ route('register.store') }}" method="post">
                    @csrf

                    <h4 class="fw-bold text-center">Daftar User</h4>
                    <div class="mb-3 text-center">Masukkan detail akun anda untuk mendaftar</div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Masukkan nama" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Masukkan email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Masukkan password" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Konfirmasi password" name="password_confirmation">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('login') }}" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-dark">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Menggunakan script blade untuk menyamakan desain --}}
    @include('includes.script')
</body>

</html>
