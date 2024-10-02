<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    {{-- Menggunakan style blade untuk menyamakan desain --}}
    @include('includes.style')

    <style>
        .login-card {
            max-width: 500px;
        }

        .full {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="full d-flex justify-content-center align-items-center">
        <div class="login-card card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="post" novalidate>
                    @csrf

                    <h4 class="">Si Magang</h4>
                    <div class="mb-3">Masukkan detail akun anda untuk memulai</div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Masukkan email anda" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password anda"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Masuk</button>
                    </div>

                    <div class="d-grid mt-3">
                        <a href="{{ route('register.create') }}" class="btn btn-dark">Daftar</a> <!-- Mengarah ke halaman register -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Menggunakan script blade untuk menyamakan desain --}}
    @include('includes.script')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
