@extends('layouts.admin')

@section('title')
  Dashboard - Advocacy Progress Report
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Advocacy Progress Report</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Advocacy Progress Report</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Pengaduan Mahasiswa</h4>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0" style="overflow:auto">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Pengadu</th>
                      <th>Kategori</th>
                      <th>Judul</th>
                      <th>Isi Pengaduan</th>
                      <th>Dibuat</th>
                      <th>Status</th>
                      @can('Edit_Apr')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($pengaduan as $item)
                      <tr>
                        <td>{{ $loop->iteration + $pengaduan->firstItem() - 1 }}</td>
                        <td>{{ $item->pengadu }}</td>
                        <td style="text-transform: uppercase">{{ $item->kategori }}</td>
                        <td>{!! Str::limit($item->judul, 50) !!}
                        </td>
                        <td>{!! Str::limit($item->isi_pengaduan, 1000) !!}
                          <div class="table-links">
                            <a href="apr/downloadpf/{{ $item['id'] }}">Detail</a>
                          </div>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</td>
                        <td>{{ $item->status_pengaduan }}</td>
                        <td>
                          <form action="apr/dikaji/{{$item['id']}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary tombol-status mt-1" style="border-radius:25px;">Dikaji</button>
                        </form>
                        <form action="apr/proses/{{$item['id']}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning tombol-status mt-1" style="border-radius:25px;">Proses</button>
                        </form>
                        <form action="apr/selesai/{{$item['id']}}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-success tombol-status mt-1" style="border-radius:25px;">Selesai</button>
                      </form>  
                        </td>
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
              {{ $pengaduan->links() }}
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Advocacy Progress Report</h4>
              @can('Tambah_Apr')
                <div class="card-header-action">
                  <a href="{{ route('apr.create') }}" class="btn btn-primary">Tambah</a>
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
                              <a href="{{ route('apr.edit', $report->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Apr')
                              <a href="{{ route('apr.delete', $report->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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