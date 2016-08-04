function edit_nama_akun(id_detail_akun, id_akun, no_akun, nama_akun) {
    $('.modal-body input[name=id_detail_akun]').val(id_detail_akun);
    $('.modal-body select[name=id_akun]').val(id_akun);
    $('.modal-body input[name=no_akun]').val(no_akun);
    $('.modal-body input[name=nama_akun]').val(nama_akun);
}
function BerhasilMenyimpan(pesan){
    swal({
        title: "",
        text: pesan,
        // timer: 2000,
        type: "success",
        showConfirmButton: true
    });
}

function GagalMenyimpan(pesan){
    swal({
        title: "",
        text: pesan,
        // timer: 2000,
        type: "error",
        showConfirmButton: true
    });
}
function hapus_nama_akun(id, nama) {
    BootstrapDialog.confirm({
        title: 'Perhatian',
        message: 'Apakah Anda yakin ingin menghapus ' + nama,
        type: BootstrapDialog.TYPE_DEFAULT,
        draggable: true, // <-- Default value is false
        btnCancelLabel: 'Batal',
        btnOKLabel: 'Hapus',
        btnOKClass: 'btn-danger',
        callback: function(result) {
            if(result) {
                // window.location.href = 'index.php?menu=nama_akun&action=hapus&id=' + id;
                stringUrl = '../../ajax/nama_akun.php'

                $.ajax({
                    url : stringUrl,
                    data : 'id=' + id + '&aksi=hapus',
                    cache: false,
                    success : function(response){
                        $(".data-content").html(response);
                    }
                });
            } else {
                return false;
            }
        }
    });
}
$(document).ready(function(){
    //ajax ketikan btn di click
    $('#bt-tambah').click(function(){

        var id_akun = $('#tid_akun').val()
        var nama_akun = $('#tnama_akun').val()
        var no_akun = $('#tno_akun').val()

        stringUrl = '../../ajax/nama_akun.php'

        $.ajax({
            url : stringUrl,
            data : 'id_akun=' + id_akun + '&nama_akun=' + nama_akun + '&no_akun=' + no_akun + '&aksi=tambah',
            cache: false,
            success : function(response){
                $(".data-content").html(response);
            }
        });
    });
    $('#bt-ubah').click(function(){

        var id_detail_akun = $('#uid_detail_akun').val()
        var id_akun = $('#uid_akun').val()
        var nama_akun = $('#unama_akun').val()
        var no_akun = $('#uno_akun').val()

        stringUrl = '../../ajax/nama_akun.php'

        $.ajax({
            url : stringUrl,
            data : 'id_detail_akun=' + id_detail_akun + '&id_akun=' + id_akun + '&nama_akun=' + nama_akun + '&no_akun=' + no_akun + '&aksi=ubah',
            cache: false,
            success : function(response){
                $(".data-content").html(response);
            }
        });
    });
});

$(function () {
    //Initialize Select2 Elements
    $('.selecttambah').select2({
        dropdownParent: $('#tambah')
    });
    $('.selectedit').select2({
        dropdownParent: $('#edit')
    });

    //Money Euro
    $("[data-mask]").inputmask();
    //Data Tables
    $("#datatable1").DataTable();
    $('#datatable2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true
    });
});
