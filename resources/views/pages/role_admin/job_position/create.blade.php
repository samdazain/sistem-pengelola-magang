@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Buat Lowongan Baru</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk menambahkan lowongan pekerjaan baru dengan mengisi detail seperti judul, deskripsi, dan persyaratan yang diperlukan.</p>
        <form method="POST" action="{{ route('job-position.store') }}" id="jobPositionForm">
            @csrf
            <div class="row mb-4">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Nama Loker</label>
                    <input type="text" class="form-control" required name="title" id="title">
                </div>
                <div class="col-4 mb-3">
                    <label for="location" class="form-label">Location</label>
                    <select class="form-control" required name="location" id="location">
                        <option value="" disabled selected>Pilih Lokasi</option>
                        <option value="onsite">Onsite</option>
                        <option value="daring">Daring</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" required name="status" id="status">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="jumlah_kuota" class="form-label">Jumlah Kuota</label>
                    <input type="number" class="form-control" required name="quota" id="jumlah_kuota">
                </div>
                <div class="col-4 mb-3">
                    <label for="closing_date" class="form-label">Penutupan</label>
                    <input type="date" class="form-control" required name="closing_date" id="closing_date">
                </div>
                <div class="col-4 mb-3">
                    <label for="announcement_date" class="form-label">Pengumuman</label>
                    <input type="date" class="form-control" required name="announcement_date" id="announcement_date">
                </div>
                <div class="col-6">
                    <label for="editor1">Deskripsi</label>
                    <textarea id="editor1" rows="10" cols="80" required name="description"></textarea>
                </div>
                <div class="col-6">
                    <label for="editor2">Persyaratan</label>
                    <textarea id="editor2" rows="10" cols="80" required name="requirements"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('custom-style')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
@endpush

@push('custom-scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<script>
    let editor1, editor2;

    ClassicEditor
    .create(document.querySelector('#editor1'))
    .then(editor => {
        editor1 = editor;
        editor.model.document.on('change:data', () => {
            document.querySelector('#editor1').value = editor.getData();
        });
    })
    .catch(error => {
        console.error('Error initializing editor1:', error);
    });

ClassicEditor
    .create(document.querySelector('#editor2'))
    .then(editor => {
        editor2 = editor;
        editor.model.document.on('change:data', () => {
            document.querySelector('#editor2').value = editor.getData();
        });
    })
    .catch(error => {
        console.error('Error initializing editor2:', error);
    });




</script>
@endpush
