<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Kas Penjualan</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <input type="text" class="form-control" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" onchange>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Transaksi</th>
                                <th>Jumlah</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>2022-06-24</td>
                                <td class="text-start">Penjualan Barang</td>
                                <td class="text-end">7,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><span data-feather="external-link"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>2022-06-25</td>
                                <td class="text-start">Penjualan Barang</td>
                                <td class="text-end">17,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><span data-feather="external-link"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>2022-06-25</td>
                                <td class="text-start">Penjualan Barang</td>
                                <td class="text-end">7,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><span data-feather="external-link"></span></a>
                                </td>
                            </tr>
                        </table>
                        <table class="table table-hover table-sm table-primary">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Transaksi</th>
                                <th>Jumlah</th>
                            </tr>
                            <tr class="text-center">
                                <td></td>
                                <td></td>
                                <td class="text-start"></td>
                                <td class="text-end">0</td>
                            </tr>
                        </table>
                        <form class="row" action="">
                            <div class='col mb-2'>
                                <label class='form-label' for='tgl'>Tanggal</label>
                                <input type='text' class='form-control' name='tgl' id='tgl'>
                            </div>
                            <div class='col mb-2'>
                                <label class='form-label' for='ket'>Keterangan</label>
                                <input type='text' class='form-control' name='ket' id='ket'>
                            </div>
                            <div class="text-center mt-2">
                                <a class="btn btn-secondary">Batal</a>
                                <a class="btn btn-primary submit">Proses</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalPenjualan' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalPenjualanLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalPenjualanLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='id'>ID Penjualan</label>
                                <input type='text' class='form-control' name='id' id='id'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Penjualan</label>
                                <input type='text' class='form-control' name='nama' id='nama'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='alamat'>Alamat</label>
                                <input type='text' class='form-control' name='alamat' id='alamat'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='telepon'>Telepon</label>
                                <input type='text' class='form-control' name='telepon' id='telepon'>
                            </div>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>
                            <button type='submit' class='btn btn-primary'>Simpan</button>
                        </div>
                    </form>
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
    $('#tgl').on('change', function() {
        $('#ket').focus();
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
                swal("Saved!", "Data Transaksi berhasil disimpan!", "success")
            }
        );
    };
</script>