@extends('partials/sidebar')
@extends('layouts.main')

@section('content')
        
    <div class="content-header">
    <div class="container-fluid">
            <h1>MAHASISWA</h1>
    </div>
</div>


<div class="content">
<div class="container-fluid">
        <div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="kualitas-tab" data-toggle="tab" href="#kualitas" role="tab" aria-controls="kualitas" aria-selected="true">Kualitas Input Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="mhsAsing-tab" data-toggle="tab" href="#mhs-asing" role="tab" aria-controls="mhs-asing" aria-selected="false">Mahasiswa Asing</a>
        </li>
      </ul>
      
</div>
<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
                <p class="d-flex justify-content-between">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Deskripsi
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <p>
                            Tuliskan data daya tampung, jumlah calon mahasiswa (pendaftar dan peserta yang lulus 
                            seleksi), jumlah mahasiswa baru (reguler dan transfer) dan jumlah mahasiswa aktif 
                            (reguler dan transfer) dalam 5 tahun terakhir di Program Studi yang diakreditasi dengan 
                            mengikuti format Tabel 2.a berikut ini.
                        </p>
                        Keterangan: <br>
                        TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi.
                    </div> 
                </div>
                <p>Kualitas Input Mahasiswa Tab</p>
            </div>
            <div class="tab-pane fade" id="mhs-asing" role="tabpanel" aria-labelledby="mhsAsing-tab">
                <p>Mahasiswa Asing Tab</p>
            </div>
          </div>
    </div>
</div>

@endsection