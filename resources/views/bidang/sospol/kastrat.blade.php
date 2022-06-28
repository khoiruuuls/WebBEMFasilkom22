@extends('layouts.app')

@section('title')
Kajian dan Aksi Strategis | Kabinet Arthasastra
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Kajian dan Aksi Strategis</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan departemen Kajian dan Aksi Strategis sebagai pionir kajian permasalahan
            serta meningkatkan literasi dengan kajian permasalahan yang berkembang.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Pengawalan isu-isu strategi.
            </li>
            <li>
              Membangun gerakan yang sinergis.
            </li>
            <li>
              Meningkatkan intelektual dan literasi.
            </li>
            <li>
              Meningkatkan akses informasi sosial-politik.
            </li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Kajian dan Aksi Strategis') && ($item->bidang->nama == 'Sosial Politik'))
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Koordinator Departemen</h4>
                    <p>{{ $item->nama }}</p>
                  </div>
                </div>
              </div>
            @endif
          @empty
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Koordinator Departemen</h4>
                  <p>Nafis Naufal Anwari</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Nafis Naufal Anwari</p>
              </div>
            </div>
          </div> --}}
          
        </div>

        <div class="row justify-content-center anggota">

          <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

            @forelse ($pengurus as $item)
              @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Kajian dan Aksi Strategis') && ($item->bidang->nama == 'Sosial Politik'))
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-body">
                      <h4>Anggota</h4>
                      <p>{{ $item->nama }}</p>
                    </div>
                  </div>
                </div>
              @endif
            @empty
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Adam Darmawan</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Mohamad Alda</p>
                  </div>
                </div>
              </div>
            @endforelse

            {{-- <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Adam Darmawan</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Mohamad Alda</p>
                </div>
              </div>
            </div> --}}

          </div>

        </div>
      </div>
  </section>
  <!-- End Content-Bem -->
@endsection