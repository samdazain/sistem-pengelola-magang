@extends('admin.layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Posisi Pekerjaan</h5>
        <p class="card-description">Halaman ini memungkinkan admin untuk melihat rincian posisi pekerjaan secara lebih detail.</p>
        <form  id="jobPositionForm">

            <div class="row mb-4">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Nama Loker</label>
                    <input type="text" class="form-control" value="{{$jobDetail->title}}" disabled name="title" id="title">
                </div>
                <div class="col-4 mb-3">
                    <label for="location" class="form-label">Location</label>
                    <select class="form-control" name="location" id="location" disabled>
                        <option value="" disabled {{ old('location', $jobDetail->location ?? '') == '' ? 'selected' : '' }}>Pilih Lokasi</option>
                        <option value="onsite" {{ old('location', $jobDetail->location ?? '') == 'onsite' ? 'selected' : '' }}>Onsite</option>
                        <option value="daring" {{ old('location', $jobDetail->location ?? '') == 'daring' ? 'selected' : '' }}>Daring</option>
                    </select>
                </div>

                <div class="col-4 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" disabled name="status" id="status">
                        <option value="" disabled {{ old('status', $jobDetail->location ?? '') == '' ? 'selected' : '' }}>Pilih Status</option>
                        <option value="public" {{ old('status', $jobDetail->status ?? '') == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ old('status', $jobDetail->status ?? '') == 'private' ? 'selected' : '' }}>Private</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="jumlah_kuota" class="form-label">Jumlah Kuota</label>
                    <input type="number" class="form-control" value="{{$jobDetail->quota}}" disabled name="quota" id="jumlah_kuota">
                </div>
                <div class="col-4 mb-3">
                    <label for="closing_date" class="form-label">Penutupan</label>
                    <input type="date" class="form-control" disabled value="{{$jobDetail->closing_date}}" name="closing_date" id="closing_date">
                </div>
                <div class="col-4 mb-3">
                    <label for="announcement_date" class="form-label">Pengumuman</label>
                    <input type="date" class="form-control" disabled value="{{$jobDetail->announcement_date}}" name="announcement_date" id="announcement_date">
                </div>
                <div class="col-6">
                    <h5>Description</h5>
                    <p>{!! $jobDetail->description !!}</p>
                </div>
                <div class="col-6">
                    <h5>Persyaratan</h5>
                    <p>{!! $jobDetail->requirements !!}</p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


