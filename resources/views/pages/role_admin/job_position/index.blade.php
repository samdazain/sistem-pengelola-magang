@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Daftar Lowongan Magang</h5>
        <p>Menu "Daftar Lowongan Magang" memungkinkan admin untuk mengelola, memantau, dan memperbarui informasi lowongan magang secara efisien</p>

        <a href="{{route('job-position.create')}}" class="btn btn-success btn-sm mb-4">
            <i class="fas fa-plus"></i> Tambah
        </a>
        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>title</th>
                    <th>lokasi</th>
                    <th>closing date</th>
                    <th>announcement date</th>
                    <th>quota</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobPositions as $job)
                <tr>
                    <td>{{$job->title}}</td>
                    <td>{{$job->location}}</td>
                    <td>{{$job->closing_date}}</td>
                    <td>{{$job->announcement_date}}</td>
                    <td>{{$job->quota}}</td>
                    <td>{{$job->status}}</td>
                    <td class="d-flex">
                        <a href="{{ route('job-position.edit', $job->id) }}" class="btn btn-warning btn-sm ">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('job-position.show', $job->id)}}" class="btn btn-info btn-sm mx-2">
                            <i class="fas fa-eye"></i>
                        </a>
                        <form action="{{ route('job-position.destroy', $job->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach


            </tbody>
            <tfoot>
                <tr>
                    <th>title</th>
                    <th>lokasi</th>
                    <th>closing date</th>
                    <th>announcement date</th>
                    <th>quota</th>
                    <th>status</th>
                    <th>aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

@push('custom-style')
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/DataTables/datatables.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{asset('assets/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
@endpush


@push('custom-script')
      <!-- Javascripts -->
      <script src="{{asset('assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="https://unpkg.com/feather-icons"></script>
      <script src="{{asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
      <script src="{{asset('assets/plugins/DataTables/datatables.min.js')}}"></script>
      <script src="{{asset('assets/js/main.min.js')}}"></script>
      <script src="{{asset('assets/js/pages/datatables.js')}}"></script>
@endpush
