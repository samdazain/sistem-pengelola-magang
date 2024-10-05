@extends('admin.layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Buat Admin Baru</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk menambahkan user admin untuk mengelola halaman admin.</p>
        <form method="POST" action="{{ route('admin.store') }}" id="jobPositionForm">
            @csrf
            <div class="row mb-4">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" required  name="username">
                </div>
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Email Admin</label>
                    <input type="email" class="form-control" required  name="email">
                </div>
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">password</label>
                    <input type="password" class="form-control" required  name="password">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
