@extends('layouts.app')

@section('title')
  Advocacy Progress Report | Catralingga
@endsection

@section('content')
<!-- APR Section -->
<section id="apr" class="apr mt-5">

  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 fw-bold">
      <p>Advocacy Progress Report</p>
    </header>

    <div class="container-report mt-4 m-auto">
      <div class="card search">
        <div class="card-body">
          {!! Form::open(['url'=> Request::path(),'method'=>'GET','class' => 'form-inline']) !!}
          <div class="row g-2"> 
            <div class="col-md-4">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control search-box" name="q" value="{{ !empty(request()->input('q')) ? request()->input('q') : '' }}" placeholder="Cari advokasi">
                <button type="submit" class="btn btn-primary float-right btn-show"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <div class="col-md-2">
              {{ Form::select('status', $status, !empty(request()->input('status')) ? request()->input('status') : null, ['placeholder' => 'Semua Status', 'class' => 'form-control selectric']) }}
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
      
      @forelse ($reports as $report)
        <a href="{{ route('apr.detail', $report->slug) }}">
          <div class="card my-4 py-2">
            <div class="card-body px-4">
    
              <div class="row">
                <div class="col-md">
                  @if ($report->statusLabel() == 'Pending')
                    <span class="badge rounded-pill bg-info p-2 float-end border-0">Pending</span>
                  @elseif ($report->statusLabel() == 'Diproses')
                    <span class="badge rounded-pill bg-warning p-2 float-end border-0">Diproses</span>
                  @elseif ($report->statusLabel() == 'Selesai')
                    <span class="badge rounded-pill bg-success p-2 float-end border-0">Selesai</span>
                  @elseif ($report->statusLabel() == 'Ditolak')
                    <span class="badge rounded-pill bg-danger p-2 float-end border-0">Ditolak</span>
                  @endif
                  <h4>{{ $report->nama }}</h4>
                </div>
              </div>
    
              <div class="row mt-3">
                <div class="col-md">
                  <h5>Deskripsi</h5>
                  <p>{!! $report->deskripsi !!}</p>
                </div>
              </div>
    
            </div>
          </div>
        </a>
      @empty
        <div class="card my-4">
          <div class="card-body text-center">
            Tidak ada data
          </div>
        </div>
      @endforelse

      {{ $reports->links() }}

    </div>

  </div>

</section>
<!-- End APR Section -->
@endsection