@extends('layouts.app')

@section('title')
Kajian dan Aksi Strategis | Kabinet Catralingga
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
          <img src="{{ url('frontend/assets/img/foto_profile/foto_sospol/kastrat2022/kastrat.png') }}" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan departemen kajian dan aksi strategis sebagai pionir kajian permasalahan
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

         
            <div class="col-md-3">
              <img src="{{ url('frontend/assets/img/foto_profile/foto_sospol/kastrat2022/gilangkastrat.png') }}" alt="" class="img-thumbnail">
              <div class="card">
                <div class="card-body">
                  <h4>Koordinator Departemen</h4>
                  <p>Gilang Mahardhika Pratama</p>
                </div>
              </div>
            </div>
          
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

              <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/foto_profile/foto_sospol/kastrat2022/ranggakastrat.png') }}" alt="" class="img-thumbnail">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Muhammad Rangga Aditya</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/foto_profile/foto_sospol/kastrat2022/fauzankastrat.png') }}" alt="" class="img-thumbnail">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Fauzan Arista Alamsyah</p>
                  </div>
                </div>
              </div>
          

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