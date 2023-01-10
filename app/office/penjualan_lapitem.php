<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Laporan <strong>Penjualan Item</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group col-12 col-lg-4">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <select type="text" class="form-select" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" style="max-width:50%;" onchange>
                                    <option value="">.. item barang ..</option>
                                    <option>ATPS 10</option>
                                    <option>ATPS 6</option>
                                    <option>ATPS P12</option>
                                    <option>Ayam AH</option>
                                </select>
                                <input type="text" class="form-control" name="tgl_awl" id="tgl_awl" placeholder="Tgl awal" autocomplete="off" style="max-width:25%;" onchange>
                                <input type="text" class="form-control" name="tgl_ahr" id="tgl_ahr" placeholder="Tgl ahir" autocomplete="off" style="max-width:25%;" onchange>
                                <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th class="d-none d-md-table-cell">Kode</th>
                                <th>Member</th>
                                <th class="d-none d-md-table-cell">Nama Menu</th>
                                <th class="d-none d-md-table-cell">Harga</th>
                                <th>Qty</th>
                                <th>Jumlah</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>2022-06-20</td>
                                <td class="d-none d-md-table-cell">JI0923</td>
                                <td class="text-start">RC ACT</td>
                                <td class="d-none d-md-table-cell text-start">Ayam Geprek</td>
                                <td class="d-none d-md-table-cell text-end">15,000</td>
                                <td>10</td>
                                <td class="text-end">150,000</td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>2022-06-21</td>
                                <td class="d-none d-md-table-cell">JI0990</td>
                                <td class="text-start">RC CBR</td>
                                <td class="d-none d-md-table-cell text-start">Chicken Steak</td>
                                <td class="d-none d-md-table-cell text-end">15,000</td>
                                <td>2</td>
                                <td class="text-end">30,000</td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>2022-06-25</td>
                                <td class="d-none d-md-table-cell">JI1233</td>
                                <td class="text-start">RC CBN</td>
                                <td class="d-none d-md-table-cell text-start">Ayam Geprek</td>
                                <td class="d-none d-md-table-cell text-end">15,000</td>
                                <td>10</td>
                                <td class="text-end">150,000</td>
                            </tr>
                        </table>
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
        $('#tgl_awl').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
        $('#tgl_ahr').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });
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
</script>