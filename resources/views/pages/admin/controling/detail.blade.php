@extends('layouts.admin')

@section('title')
  Dashboard - Controling Pengurus
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengurus</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('controling.index') }}">Pengurus</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Identitas Pengurus</h4>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Nama Pengurus
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $user->name }}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Weeklyreport</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="10%">No.</th>
                      <th>Isi Laporan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($weeklyreports as $weeklyreport)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ strip_tags($weeklyreport->laporan) }}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              {{-- <a href="{{ route('pengajuan.create') }}" class="btn btn-primary mt-3 float-right">Tambah Anggota</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection