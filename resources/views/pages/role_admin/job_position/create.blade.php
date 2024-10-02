@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Buat Lowongan Baru</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk menambahkan lowongan pekerjaan baru dengan mengisi detail seperti judul, deskripsi, dan persyaratan yang diperlukan.</p>
        <form>
            <div class="row mb-4">
                <div class="col-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Loker</label>
                    <input type="email" class="form-control" required name="title">
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleInputLocation" class="form-label">Location</label>
                    <select class="form-control" required name="location">
                        <option value="" disabled selected>Pilih Lokasi</option>
                        <option value="onsite">Onsite</option>
                        <option value="daring">Daring</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleInputLocation" class="form-label">status</label>
                    <select class="form-control" required name="status">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="onsite">public</option>
                        <option value="daring">private</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleInputClosure" class="form-label">Jumlah Kuota</label>
                    <input type="date" class="form-control" required name="jumlah_kuota">
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleInputClosure" class="form-label">Penutupan</label>
                    <input type="date" class="form-control" required name="closing_date">
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleInputAnnouncement" class="form-label">Pengumuman</label>
                    <input type="date" class="form-control" required name="announcement_date">
                </div>
                <div class="col-6">
                    <label for="editor1">Deskripsi</label>
                    <textarea  id="editor1" rows="10" cols="80" required name="description"></textarea>
                </div>
                <div class="col-6">
                    <label for="editor2">Persyaratan</label>
                    <textarea  id="editor2" rows="10" cols="80" required name="requirements"></textarea>
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
