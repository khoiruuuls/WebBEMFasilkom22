@extends('layouts.app')

@section('title')
Visi Misi BEM Fasilkom | Kabinet Catralingga
@endsection

@section('content')
<!-- Structure Section -->
<section id="visimisi" class="visimisi mt-5">

    <div class="container" data-aos="fade-up">

        <header class="section-header mt-5 fw-bold">
            <p>BEM Fasilkom UNSIKA 2022</p>
        </header>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/visi.png') }}" width="250" class="float-end">
            </div>
            <div class="col-md-6">
                <h2>Visi</h2>
                <p>Terwujudnya BEM Fasilkom UNSIKA yang dedikatif dan proaktif
                    bagi kemajuan mahasiswa Fasilkom UNSIKA, masyarakat, serta bangsa
                    Indonesia.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-6">
                <h2 class="mb-4">Misi</h2>
                <ol>
                    <li>Mengembangkan program kerja yang bersifat dedikatif sebagai
                        implementasi dari nilai-nilai Tri Dharma Perguruan Tinggi.</li>
                    <li>Memberikan pelayanan advokasi yang proaktif dan tanggap terhadap isu-isu
                        yang berkembang di Fasilkom UNSIKA dan Masyarakat.</li>
                    <li>Mengoptimalkan seluruh kegiatan BEM Fasilkom UNSIKA yang
                        mampu berkolaborasi dengan setiap elemen yang ada di Fasilkom
                        UNSIKA.</li>
                </ol>
            </div>
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/misi.png') }}" width="250" class="float-start">
            </div>
        </div>

    </div>

</section>
<!-- End Structure Section -->
@endsection