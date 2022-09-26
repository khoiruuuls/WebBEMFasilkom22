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
                  <div class="table">
                    <div class="table_header">
                        <div>
                        </div>
                    </div>
                        <table class=" table scroll table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Barang</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bemitory as $item)
                                <tr>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->status_barang }}</td>
                                    <td>
                                      @can('Edit_Apr')
                                      <a href="{{ route('bemitory.edit', $item->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    @endcan
                                    
                                      @can('Hapus_Apr')
                              <a href="{{ route('bemitory.delete', $item->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
             
           
        
        <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Peminjaman Inventory BEM</h4>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <div class="table">
                    <div class="table_header">
                        <div>
                        </div>
                    </div>
                        <table class=" table scroll table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Barang</th>
                                    <th>Jumlah Yang Diajukan</th>
                                    <th>Durasi Peminjaman</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->tanggal_pinjam }}</td>
                                    <td>{{ $item->durasi }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                    <form action="bemitory/disetujui/{{$item['id']}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success tombol-status mt-1" style="border-radius:25px; <?php
                                        if($item['status'] == "dibatalkan"){
                                          echo "visibility:hidden;";
                                        }
                                        else {
                                            echo "";
                                        }
                                    ?>
                                    ">Disetujui</button></form>  
                                    
                                    <form action="bemitory/ditolak/{{$item['id']}}" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-danger tombol-status mt-1" style="border-radius:25px; <?php
                                      if($item['status'] == "dibatalkan"){
                                        echo "visibility:hidden;";
                                      }
                                      else {
                                          echo "";
                                      }
                                  ?>">Ditolak</button>
                                  </form>  
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
              </div>           
              </div>
              </div>
    </section>
@endsection