@extends('admin.layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Halaman Admin</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk menambahkan user admin untuk mengelola halaman admin.</p>
        <form >
            <div class="row mb-4">
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" disabled value="{{$admin->username}}"  name="username">
                </div>
                <div class="col-6 mb-3">
                    <label for="title" class="form-label">Email Admin</label>
                    <input type="email" class="form-control" disabled value="{{$admin->email}}"  name="email">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
