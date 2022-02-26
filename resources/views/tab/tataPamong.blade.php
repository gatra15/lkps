@extends('partials/sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h1>
    </div>
</div>


<div class="content">
<div class="container-fluid">
        <div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#kerjasama" role="tab"  aria-controls="kerjasama" aria-selected="true">Kerjasama</a>
        </li>
    </ul>
</div>
<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-pane active" id="kerjasama" role="tabpanel">
            <p class="d-flex justify-content-between">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Deskripsi
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah data
                </button>
            </p>
            <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <p>Tuliskan kerjasama tridharma di Unit Pengelola Program Studi (UPPS) dalam 3 tahun terakhir dengan mengikuti format Tabel 1 berikut ini.</p>
                Keterangan:
                <ol>
                    <li>Beri tanda V pada kolom yang sesuai</li>
                    <li>Diisi dengan judul kegiatan kerjasama yang sudah terimplementasikan, melibatkan sumber daya dan memberikan manfaat bagi Program Studi yang diakreditasi.</li>
                    <li>Bukti kerjasama dapat berupa Surat Penugasan, Surat Perjanjian Kerjasama (SPK), 
                        bukti-bukti pelaksanaan (laporan, hasil kerjasama, luaran kerjasama), atau bukti lain 
                        yang relevan. Dokumen Memorandum of Understanding (MoU), Memorandum of 
                        Agreement (MoA), atau dokumen sejenis yang memayungi pelaksanaan kerjasama,
                        tidak dapat dijadikan bukti realisasi kerjasama</li>
                </ol>

            </div> 
        </div>
    </div>

    <div class="table-responsive-disable">
        <table id="example" class="display " cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th scope="col" rowspan="1" style="width: fit-content;"></th>
                    <th rowspan="2">Tridama</th>
                    <th rowspan="2">Lembaga Mitra</th>
                    <th colspan="3" rowspan="1">Tingkat <sup>1)</sup></th>
                    <th rowspan="2">Judul Kegiatan Kerjasama <sup>2)</sup></th>
                    <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                    <th rowspan="2">Waktu Durasi</th>
                    <th rowspan="2">Bukti Kerjasama <sup>3)</sup></th>
                    <th rowspan="2">Actions</th>
                </tr>
                <tr>
                    <th scope="col"  style="width: fit-content;">#</th>
                    <th>Internasional</th>
                    <th>Nasional</th>
                    <th>Lokal/Wilayah</th>
                </tr>
            </thead>
            <tbody>
                                    </tbody>
        </table>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form id="mainform" onsubmit="return ajaxPost(event, this)" method="post" action="http://lkps.logistikdonasi.com/admin/indikator-tata/save">
                <input type="hidden" name="id" class="form-control" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>kerjasama tridharma tingkat</label>
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tridharma" id="pendidikan" value="Pendidikan">
                                <label class="form-check-label" for="pendidikan">Pendidikan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tridharma" id="penelitian" value="Penelitian">
                                <label class="form-check-label" for="penelitian">Penelitian</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tridharma" id="pengabdian" value="Pengabdian kepada Masyarakat">
                                <label class="form-check-label" for="pengabdian">Pengabdian kepada Masyarakat </label>
                            </div>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label>Lembaga Mitra</label>
                        <input type="text" name="lembaga_mitra" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tingkat</label>
                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tingkat" id="inlineRadio1" value="Internasional">
                                <label class="form-check-label" for="inlineRadio1">Internasional</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tingkat" id="inlineRadio2" value="Nasional">
                                <label class="form-check-label" for="inlineRadio2">Nasional</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tingkat" id="inlineRadio3" value="Local/Wilayah">
                                <label class="form-check-label" for="inlineRadio3">Local/Wilayah</label>
                            </div>
                        </div> 
                    </div>

                    <div class="form-group">
                        <label>Judul Kegiatan Kerjasama</label>
                        <input type="text" name="judul_kegiatan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Manfaat bagi PS yang Diakreditasi</label>
                        <textarea class="form-control" name="manfaat" rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Waktu Durasi</label>
                        <input type="text" name="waktu_durasi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Bukti Kerjasama </label>
                        <div>
                            <div id="msg"></div>
                            <div id="image-form">
                                <input type="file" name="bukti_kerjasama" class="file">
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    <div class="input-group-append">
                                        <button type="button" class="browse btn btn-primary">Browse...</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
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

<!-- Modal Delete -->
<div class="modal fade" id="modals_delete" tabindex="-1" aria-labelledby="modals_deleteLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form id="pkmFormDelete" onsubmit="ajaxPost(event, this)" method="post" action="http://lkps.logistikdonasi.com/admin/indikator-tata/delete">
            <input type="hidden" name="_token" value="0bOk19cyyRcN5yXZjpdJFr9BHn0Nc8ysDAPe8S5o">                    <input type="hidden" name="id" id="id_tata">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hapus data <strong id="tata"></strong>.</p>
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

<script>
    $('#bologna-list a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $(document).ready(function() {
        var groupColumn = 1;
        var table = $('#example').DataTable( {
            "bSort" : false, 
            "orderCellsTop": true,
            "bInfo" : true,
            "bFilter": true,
            "bPaginate": true,
            "scrollX": true,
            // // "scrollY":'380px',
            fixedColumns: true,
            "order": [[ 1, 'asc' ]],
            paging: false,
            orderCellsTop: false,
            language : {
                sLengthMenu: "Show _MENU_"
            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                var index = iDisplayIndex +1;
                $('td:eq(0)',nRow).html(index);

                return nRow;
            },
            dom: 'Bfrtip',
                                buttons: [
                    {
                        extend: 'csv',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'excel',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'pdf',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    },
                    {
                        extend: 'print',
                        footer: true,
                        exportOptions: {
                            columns: ':not(:last-child)',
                        }
                    }
                ],
                "columnDefs": [
                    { "visible": false, "targets": groupColumn }
                ],
                            "drawCallback": function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;

                var subTotal = new Array();
                var groupID = -1;
                var aData = new Array();
                var index = 0;
    
                api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                            '<tr class="group"><td colspan="10">'+group+'</td></tr>'
                        );
                        
                        last = group;
                    }


                    var vals = api.row(api.row($(rows).eq(i)).index()).data();
                        var salary = vals[6] ? parseFloat(vals[6]) : 0;
                        
                        if (typeof aData[group] == 'undefined') {
                            aData[group] = new Array();
                            aData[group].rows = [];
                            aData[group].salary = [];
                        }

                        aData[group].rows.push(i); 
                        aData[group].salary.push(salary);  
                });

                var idx= 0;

                for(var office in aData){

                    idx =  Math.max.apply(Math,aData[office].rows);

                    var sum = 0; 
                    $.each(aData[office].salary,function(k,v){
                            sum = sum + v;
                    });
                    console.log(aData[office].salary);
                    $(rows).eq( idx ).after(
                            '<tr class="group"><td class="text-bold" colspan="5"> &sum; </td>'+
                            '<td class="bg-secondary"></td>'+
                            '<td class="bg-secondary"></td>'+
                            '<td class="bg-secondary"></td>'+
                            '<td class="bg-secondary"></td>'
                            // '<td class="bg-secondary"></td></tr>',
                        );
                };
            }
        }); 
    });

    $(document).on("click", ".browse", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });

    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $("#exampleModalCenter").on('show.bs.modal', (e) => {
        let button = $(e.relatedTarget);
        let data = button.data('file');
        if(!data) return;

        $("[name='id']").val(data.id);
        $(`[name='tridharma'][value='${data.tridharma}']`).prop("checked", true);
        $("[name='lembaga_mitra']").val(data.lembaga_mitra);
        $(`[name='tingkat'][value='${data.tingkat}']`).prop("checked", true);
        $("[name='judul_kegiatan']").val(data.judul_kegiatan);
        $("[name='manfaat']").val(data.manfaat);
        $("[name='waktu_durasi']").val(data.waktu_durasi);
    });

    $("#modals_delete").on('show.bs.modal', (e) => {
        let button = $(e.relatedTarget);
        let data = button.data('file');

        id_tata.value = data.id;
        tata.innerHTML = data.lembaga_mitra;
    });
</script>
<script>
    function forgetTahun(){
        let currentLocs = window.location.href
        let urls = new URL(currentLocs);
        let search_paramss = urls.searchParams;
        search_paramss.delete('tahun-laporan');  
        urls.search = search_paramss.toString();
        let new_urls = urls.toString();

        $.ajax({
            url: "http://lkps.logistikdonasi.com/admin/dashboard/forget-tahun-laporan",
            type: 'GET',
            success: function(res) {
                window.location.href = "/admin/dashboard"
            }
        });
    }

    $( document ).ready(function() {
        $.ajax({
            url: "http://lkps.logistikdonasi.com/admin/dashboard/get-prodi-name",
            type: 'GET',
            success: function(res) {
                prodi_title.innerHTML = res.prodi;
            }
        });
    });

    $('.modal').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
        $("[name='id']").val('');
        $(this).find('img').attr("src", "");;
    });
</script>
@endsection