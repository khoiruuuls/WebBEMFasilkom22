@extends('layouts.admin')

@section('title')
  Dashboard - Weekly Report
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Laporan Kegiatan Anggota BEM</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('weeklyreport.index') }}">Weeklyreport</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header border-0">
            <h4>Daftar Laporan</h4>
            @can('Tambah_Weeklyreport')
            <div class="card-header-action">
              <a href="{{ route('weeklyreport.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            @endcan
          </div>
          <div class="card-body">
            @include('includes.admin.flash')
            <div class="table-responsive">
              <table class="table table-bordered table-striped mb-0">
                <thead>
                  <tr>
                    <th width="10%">#</th>
                    <th width="90%">Isi Laporan</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($weeklyreports as $weeklyreport)
                  <tr>
                    <td>Weeks ke - {{ $loop->iteration }}</td>
                    <td>{{ strip_tags($weeklyreport->laporan) }}</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          {{-- <div class="card-footer pt-1">
            {{ $weeklyreports->links() }}
          </div> --}}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection