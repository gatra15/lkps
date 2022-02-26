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
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#kualitas" role="tab" aria-controls="kualitas" aria-selected="true">Kualitas Input Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="#mhs-asing" role="tab" aria-controls="mhs-asing" aria-selected="false">Mahasiswa Asing</a>
        </li>
    </ul>
</div>
<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-pane active" id="kualitas" role="tabpanel">
            <div class="tab-content mt-3">
                <div class="tab-pane active" id="kerjasama" role="tabpanel">
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
                </div>    
            </div>

            <div class="table-responsive-disable">
                <table id="example" class="display " cellspacing="0" width="100%">
                    <thead>
                        <tr> 
                            <th rowspan="2">Tahun Akademik</th>
                            <th rowspan="2">Daya Tampung</th>
                            <th colspan="2" rowspan="1">Jumlah Calon Mahasiswa</th>
                            <th colspan="2" rowspan="1">Jumlah Mahasiswa Baru</th>
                            <th colspan="2" rowspan="1">Jumlah Mahasiswa Aktif</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th>Pendaftaran</th>
                            <th>Lulus Seleksi</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                                                       <tr>
                                <td class="modal_mhs_kualitas  cursor-pointer" data-thn-akd="TS-4">TS-4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex">
                                        <a data-toggle="modal" data-target="#modal_kuliatas_mhs" data-item="{&quot;thn_akdmk&quot;:&quot;TS-4&quot;}" data-type="rujukan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#modals_delete" data-item="{&quot;thn_akdmk&quot;:&quot;TS-4&quot;}" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                                                       <tr>
                                <td class="modal_mhs_kualitas  cursor-pointer" data-thn-akd="TS-3">TS-3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex">
                                        <a data-toggle="modal" data-target="#modal_kuliatas_mhs" data-item="{&quot;thn_akdmk&quot;:&quot;TS-3&quot;}" data-type="rujukan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#modals_delete" data-item="{&quot;thn_akdmk&quot;:&quot;TS-3&quot;}" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                                                       <tr>
                                <td class="modal_mhs_kualitas  cursor-pointer" data-thn-akd="TS-2">TS-2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex">
                                        <a data-toggle="modal" data-target="#modal_kuliatas_mhs" data-item="{&quot;thn_akdmk&quot;:&quot;TS-2&quot;}" data-type="rujukan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#modals_delete" data-item="{&quot;thn_akdmk&quot;:&quot;TS-2&quot;}" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                                                       <tr>
                                <td class="modal_mhs_kualitas  cursor-pointer" data-thn-akd="TS-1">TS-1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex">
                                        <a data-toggle="modal" data-target="#modal_kuliatas_mhs" data-item="{&quot;thn_akdmk&quot;:&quot;TS-1&quot;}" data-type="rujukan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#modals_delete" data-item="{&quot;thn_akdmk&quot;:&quot;TS-1&quot;}" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                                                       <tr>
                                <td class="modal_mhs_kualitas  cursor-pointer" data-thn-akd="TS">TS</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="d-flex">
                                        <a data-toggle="modal" data-target="#modal_kuliatas_mhs" data-item="{&quot;thn_akdmk&quot;:&quot;TS&quot;}" data-type="rujukan" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a data-toggle="modal" data-target="#modals_delete" data-item="{&quot;thn_akdmk&quot;:&quot;TS&quot;}" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                                                   </tbody>
                </table>
            </div>
        </div>

        <!-- ---------------------------- -->
            
        <div class="tab-pane" id="mhs-asing" role="tabpanel" aria-labelledby="mhs-asing-tab">  
            <div class="tab-content mt-3">
                <div class="tab-pane active" id="kerjasama" role="tabpanel">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_mhs_asing">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p>Tabel 2.b berikut ini diisi oleh pengusul dari Program Studi pada program 
                                Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan.
                                Tuliskan jumlah mahasiswa asing yang terdaftar di seluruh program studi pada UPPS 
                                dalam 3 tahun terakhir dengan mengikuti format Tabel 2.b berikut ini.
                            </p>
                        </div> 
                    </div>
                </div>    
            </div>

            <div class="table-responsive-disable">
                <table id="example2" class="display " cellspacing="0" width="100%">
                    <thead>
                        <tr> 
                            <th scope="col" rowspan="1" style="width: fit-content;"></th>
                            <th rowspan="2">Program Studi</th>
                            <th colspan="3" rowspan="1">Jumlah Mahasiswa Aktif</th>
                            <th colspan="3" rowspan="1">Jumlah Mahasiswa Asing Penuh Waktu (Full-time)</th>
                            <th colspan="3" rowspan="1">Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</th>
                            <th rowspan="2">Actions</th>
                        </tr>
                        <tr>
                            <th scope="col"  style="width: fit-content;">#</th>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                            <th>TS-2</th>
                            <th>TS-1</th>
                            <th>TS</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_kuliatas_mhs" tabindex="-1" role="dialog" aria-labelledby="modal_kuliatas_mhsTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Data Kualitas Input Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="mainform" onsubmit="return ajaxPost(event, this)" method="post" action="http://lkps.logistikdonasi.com/admin/indikator-mhs/save">
            <input type="hidden" name="id" class="form-control" value="">
            <div class="modal-body">
                <div class="form-group">
                    <label>Tahun Akademik</label>
                    <input type="text" id="thn_akdmk" name="thn_akdmk" class="form-control" readonly>
                </div>
            
                <div class="form-group">
                    <label>Daya Tampung</label>
                    <input type="number" id="daya_tampung" name="daya_tampung" class="form-control">
                </div>

                <div class="form-group">
                    <label><u>Jumlah Calon Mahasiswa</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Pendaftaran</label>
                            <input type="number" class="form-control" name="c_pendaftar">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Lulus Seleksi</label>
                            <input type="number" class="form-control" name="c_lulus_seleksi">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label><u>Jumlah Calon Mahasiswa Baru</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Reguler</label>
                            <input type="number" class="form-control" name="mhs_reguler">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Transfer</label>
                            <input type="number" class="form-control" name="mhs_transfer">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label><u>Jumlah Mahasiswa Aktif</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Reguler</label>
                            <input type="number" class="form-control" name="mhs_aktif_reguler">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Transfer</label>
                            <input type="number" class="form-control" name="mhs_aktif_transfer">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit"  class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- modal mhs asing -->
<div class="modal fade" id="modal_mhs_asing" tabindex="-1" role="dialog" aria-labelledby="modal_mhs_asingTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Data Mahasiswa Asing</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="mainform" onsubmit="return ajaxPost(event, this)" method="post" action="http://lkps.logistikdonasi.com/admin/indikator-mhs/save-mhs-asing">
            <input type="hidden" name="id" class="form-control" value="">
            <div class="modal-body">
                <div class="form-group">
                    <label>Program Studi</label>
                    <input type="text" id="program_studi" name="program_studi" class="form-control">
                </div>

                <div class="form-group">
                    <label><u>Jumlah Mahasiswa Aktif</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">TS-2</label>
                            <input type="number" class="form-control" name="mhs_aktif_ts_2">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">TS-1</label>
                            <input type="number" class="form-control" name="mhs_aktif_ts_1">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">TS</label>
                            <input type="number" class="form-control" name="mhs_aktif_ts">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label><u>Jumlah Mahasiswa Asing Penuh Waktu (Full-time)</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">TS-2</label>
                            <input type="number" class="form-control" name="mhs_asing_ft_ts_2">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">TS-1</label>
                            <input type="number" class="form-control" name="mhs_asing_ft_ts_1">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">TS</label>
                            <input type="number" class="form-control" name="mhs_asing_ft_ts">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label><u>Jumlah Mahasiswa Asing Paruh Waktu (Part-time)</u></label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputCity">TS-2</label>
                            <input type="number" class="form-control" name="mhs_asing_pt_ts_2">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">TS-1</label>
                            <input type="number" class="form-control" name="mhs_asing_pt_ts_1">
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">TS</label>
                            <input type="number" class="form-control" name="mhs_asing_pt_ts">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit"  class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- Modal Delete-->
<div class="modal fade" id="modals_delete" tabindex="-1" aria-labelledby="modals_deleteLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form id="FormDelete" onsubmit="ajaxPost(event, this)" method="post" action="">
            <input type="hidden" name="_token" value="0bOk19cyyRcN5yXZjpdJFr9BHn0Nc8ysDAPe8S5o">                    <input type="hidden" name="id" id="id_data">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hapus data <strong id="datas"></strong>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" value="Hapus" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>
</div>


</div>
</div>

</div>

@endsection