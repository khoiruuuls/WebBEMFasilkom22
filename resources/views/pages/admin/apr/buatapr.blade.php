@extends('layouts.admin')

@section('title')
  Dashboard - Advocacy Progress Report
@endsection

@section('content')
  @php
      $formTitle = !empty($item) ? 'Edit' : 'Tambah';
      $formButton = !empty($item) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Advocacy Progress Report</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('apr.index') }}">Advocacy Progress Report</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Advokasi</h4>
            </div>
            <div class="card-body">
              @if (!empty($item))
                {!! Form::model($item, ['route' => ['apr.update', $item->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'apr.store', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('nama', 'Nama Advokasi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama', $pengaduan->judul, ['class' => 'form-control', 'required' => '','disabled']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', $pengaduan->isi_pengaduan, ['id'=>'summernote','class' => '']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('keterangan', 'Kategori', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('keterangan', $pengaduan->kategori, ['class' => 'form-control', 'required' => '','disabled']) !!}
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    {!! Form::label('status', 'Status', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('status', $status, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Status']) !!}
                    </div>
                  </div>
                  

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">{{ $formButton }}</button>
                    </div>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: "Ketikan sesuatu disini . . .",
            height: '200',
            toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>
@endsection