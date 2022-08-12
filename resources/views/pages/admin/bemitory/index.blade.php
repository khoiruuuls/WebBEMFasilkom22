@extends('layouts.admin')

@section('title')
  Dashboard - inventory BEM
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>inventory BEM</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Inventory BEM</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Inventory BEM</h4>
              @can('Tambah_Apr')
                <div class="card-header-action">
                  <a href="{{ route('bemitory.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      {{-- <th>Deskripsi</th>
                      <th>Keterangan</th> --}}
                      <th>Dibuat pada</th>
                      <th>Diperbarui pada</th>
                      <th>Status</th>
                      @can('Edit_Apr')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($reports as $report)
                      <tr>
                        <td>{{ $loop->iteration + $reports->firstItem() - 1 }}</td>
                        <td>
                          {{ $report->nama }}
                          <div class="table-links">
                            <a href="#">Detail</a>
                          </div>
                        </td>
                        {{-- <td>{!! Str::limit($report->deskripsi, 50) !!}</td>
                        <td>{!! Str::limit($report->keterangan, 50) !!}</td> --}}
                        <td>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($report->updated_at)->translatedFormat('d F Y') }}</td>
                        <td>{{ $report->statusLabel() }}</td>
                        @can('Edit_Apr')
                          <td>
                            @can('Edit_Apr') 
                              <a href="{{ route('bemitory.edit', $report->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Apr')
                              <a href="{{ route('bemitory.delete', $report->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
                      </tr>
                    @empty
                      <tr>
                        <td colspan="8" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $reports->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection