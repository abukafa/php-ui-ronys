<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Transaksi <strong>Penjualan</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 col-md-3 d-flex align-items-end mb-4">
                                <small class="position-absolute text-light px-3 py-1 mb-3" style="background-color: rgba(0,0,0,0.7);">Chicken Steak</small>
                                <a href="#"><img src="../../public/menu/4.jpg" class="img-fluid rounded-3" /></a>
                            </div>
                            <div class="col-6 col-md-3 d-flex align-items-end mb-4">
                                <small class="position-absolute text-light px-3 py-1 mb-3" style="background-color: rgba(0,0,0,0.7);">Pisang Coklat</small>
                                <a href="#"><img src="../../public/menu/1.jpg" class="img-fluid rounded-3" /></a>
                            </div>
                            <div class="col-6 col-md-3 d-flex align-items-end mb-4">
                                <small class="position-absolute text-light px-3 py-1 mb-3" style="background-color: rgba(0,0,0,0.7);">Coca Cola</small>
                                <a href="#"><img src="../../public/menu/2.jpg" class="img-fluid rounded-3" /></a>
                            </div>
                            <div class="col-6 col-md-3 d-flex align-items-end mb-4">
                                <small class="position-absolute text-light px-3 py-1 mb-3" style="background-color: rgba(0,0,0,0.7);">Pepsi</small>
                                <a href="#"><img src="../../public/menu/3.jpg" class="img-fluid rounded-3" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th class="d-none d-md-table-cell">Kode</th>
                                <th>Menu</th>
                                <th class="d-none d-md-table-cell">Harga</th>
                                <th>Qty</th>
                                <th>Jumlah</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td class="d-none d-md-table-cell">M001</td>
                                <td class="text-start">Chicken Steak</td>
                                <td class="d-none d-md-table-cell text-end">15,000</td>
                                <td>3</td>
                                <td class="text-end">35,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td class="d-none d-md-table-cell">M003</td>
                                <td class="text-start">Coca cola</td>
                                <td class="d-none d-md-table-cell text-end">7,000</td>
                                <td>3</td>
                                <td class="text-end">21,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="table-active text-center">
                                <th></th>
                                <th class="d-none d-md-table-cell"></th>
                                <th class="d-none d-md-table-cell"></th>
                                <th></th>
                                <th></th>
                                <th class="text-end">56,000</th>
                                <th></th>
                            </tr>
                        </table>
                        <form class="row" action="">
                            <div class='col-6 col-md-3 mb-2'>
                                <label class='form-label' for='tgl'>Tanggal</label>
                                <input type='text' class='form-control' name='tgl' id='tgl'>
                            </div>
                            <div class='col-6 col-md-3 mb-2'>
                                <label class='form-label' for='member'>Member</label>
                                <select type='text' class='form-select' name='member' id='member'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Umum</option>
                                </select>
                            </div>
                            <div class='col-6 col-md-3 mb-2'>
                                <label class='form-label' for='tran'>Transaksi</label>
                                <select type='text' class='form-select' name='tran' id='tran'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Tunai</option>
                                </select>
                            </div>
                            <div class='col-6 col-md-3 mb-2'>
                                <label class='form-label' for='bayar'>Bayar</label>
                                <div class="input-group">
                                    <input type='text' class='form-control text-end' name='bayar' id='bayar'>
                                    <input type='text' class='form-control text-end' name='kembali' id='kembali' readonly>
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <a class="btn btn-secondary cancel">Batal</a>
                                <a class="btn btn-primary submit">Proses</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require '../template/footer.php';
?>

<script src="../../assets/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $('#tgl').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
    $('#bayar').on('keyup', function() {
        $('#kembali').val($(this).val() - 56000)
    })
    $(function() {
        $('.inputPenjualan').on('click', function() {
            $('#modalPenjualanLabel').html('Tambah Data <b>Penjualan</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#nama').val('');
            $('#alamat').val('');
            $('#telepon').val('');
        });
    })
    $(function() {
        $('.editPenjualan').on('click', function() {
            $('#modalPenjualanLabel').html('Ubah Data <b>Penjualan</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#id').val('M001');
            $('#nama').val('Aceng Komara');
            $('#alamat').val('Jln. Kujang Cikoneng Ciamis');
            $('#telepon').val('086633442222');
        });
    })
    document.querySelector('.submit').onclick = function() {
        swal({
                title: "Proses Data?",
                text: "Data tidak bisa dikembalikan!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-primary",
                confirmButtonText: "Process",
                closeOnConfirm: false
            },
            function() {
                swal("Saved!", "Data Pembelian berhasil disimpan!", "success")
            }
        );
    };
    document.querySelector('.cancel').onclick = function() {
        swal({
                title: "Cancel Process?",
                text: "Data akan dihapus!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Delete",
                closeOnConfirm: false
            },
            function() {
                swal("Deleted!", "Data berhasil dihapus!", "success")
            }
        );
    };
</script>