@extends('admin.layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Edit Halaman Admin</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk menambahkan user admin untuk mengelola halaman admin.</p>
        <form method="POST" action="{{ route('admin.update', $admin->id) }}" id="jobPositionForm">
            @csrf
            @method('put')
            <div class="row mb-4">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" value="{{$admin->username}}"  name="username">
                </div>
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Email Admin</label>
                    <input type="email" class="form-control" value="{{$admin->email}}"  name="email">
                </div>
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">password</label>
                    <input type="password" class="form-control"  name="password">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
