@extends('layouts.app')

@section('title')
Filosofi Logo | Kabinet Catralingga
@endsection

@section('content')
<!-- Logo Section -->
<section id="logo" class="logo mt-5">

    <div class="container" data-aos="fade-up">

        <header class="section-header mt-5 fw-bold">
            <p>Filosofi Logo BEM Fasilkom UNSIKA 2022</p>
        </header>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/bawah_22.png') }}" width="180" class="logo-arthasastra">
            </div>
            <div class="col-md-6 deskripsi-arthasastra">
                <h2>Nilai Catralingga</h2>
                <p>#CATRALINGGA–didasarkan pada dua kata dalam bahasa sansekerta catra dan lingga. 
                    “Catra” bermakna payung yang mengibaratkan BEM FASILKOM 2022 sebagai pelindung ormawa dalam lingkup FASILKOM 
                    dan “Lingga” yang diadaptasi dari nama kerajaan hindu Kalingga yang memiliki arti burung yang menunjukkan harapan 
                    dan tujuan BEM FASILKOM 2022 untuk terbang setinggi dan sejauh apapun untuk mencapai tujuan dengan sepasang sayapnya.</p>

                <p>Mengacu pada hal tersebut, kami memakai nama Catralingga sebagai nama kabinet
                    BEM FASILKOM UNSIKA periode 2022 dengan harapan dan cita-cita untuk menjadikan
                    BEM FASILKOM UNSIKA sebagai organisasi yang dapat melindungi ormawa dalam
                    lingkup Fakultas dan bisa mencapai tujuan-tujuan lainnya yang sudah dirumuskan bersama.</p>
                
                <p>Catralingga juga dapat diartikan sebagai sarana harapan dan tujuan yang
                    dilambangkan dengan seekor burung Lingga yang tangguh nan gagah, untuk mencapai tujuan
                    dengan sepasang sayapnya. Dengan lambang api diatasnya yang mengartikan semangat yang
                    harus terus berkobar dalam BEM FASILKOM 2022.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/burung.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Burung Lingga</h2>
                <p>Melambangkan harapan dan tujuan BEM Fasilkom 2022 untuk terbang setinggi dan sejauh apapun untuk mencapai tujuan dengan sepasang sayapnya.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/sayap.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Bentuk Sayap</h2>
                <p>Sayap yang membentuk payung bermakna untuk menjaga api yang berkobar agar tetap menyala.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/api.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Kobaran Api</h2>
                <p>Kobaran api melambangkan semangat yang harus tetap berkobar dalam BEM Fasilkom 2022.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/gir.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Gear</h2>
                <p>Sebagai simbol dimana dalam BEM semua harus berjalan seperti seharusnya.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/lancip.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">5 Bagian Lancip Sayap</h2>
                <p>5 bagian sayap yang melambangkan 5 peran dan fungsi mahasiswa.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/merah.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Warna Merah</h2>
                <p>Warna merah melambangkan tekad, semangat, hasrat, dan juga cinta.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Logo/jingga.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Warna Jingga</h2>
                <p>Warna jingga melambangkan rasa antusias, kreatifitas, dan juga kebulatan.</p>
            </div>
        </div>

    </div>

</section>
<!-- End Logo Section -->
@endsection