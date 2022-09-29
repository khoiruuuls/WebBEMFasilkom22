@extends('layouts.admin')

@section('title')
  Dashboard - Controling Pengurus
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengurus</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Pengurus</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Pengurus</h4>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="25%">#</th>
                      <th width="75%">Nama</th>
                      <th width="25%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $user)
                        <tr>
                          <td>{{ $loop->iteration}}</td>
                          <td>{{ $user->name }}</td>
                          <td>
                            @can('Lihat_Controling')
                            <a href="{{ route('controling.show', $user->id) }}">Detail</a>
                            @endcan
                          </td>
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
            <div class="card-footer pt-1">
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection