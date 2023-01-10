<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Utang</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group col-12 col-lg-4">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <select type="text" class="form-select" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" style="max-width:50%;" onchange>
                                    <option value="">.. supplier ..</option>
                                    <option>CV Zagu Jaya Utama</option>
                                    <option>DN Sejahtera</option>
                                    <option>Gia Supplier Boiler</option>
                                    <option>Umum</option>
                                </select>
                                <input type="text" class="form-control" name="tgl_awl" id="tgl_awl" placeholder="Tanggal" autocomplete="off" style="max-width:25%;" onchange>
                                <input type="text" class="form-control" name="tgl_ahr" id="tgl_ahr" placeholder="Tempo" autocomplete="off" style="max-width:25%;" onchange>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary inputUtang" data-bs-toggle="modal" data-bs-target="#modalUtang"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th class="d-none d-md-table-cell">Faktur</th>
                                <th>Tanggal</th>
                                <th>Tempo</th>
                                <th>Supplier</th>
                                <th class="d-none d-md-table-cell">Utang</th>
                                <th>Sisa</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td class="d-none d-md-table-cell">UB0987</td>
                                <td>2022-06-15</td>
                                <td>2022-06-25</td>
                                <td class="text-start">DN Sejahtera</td>
                                <td class="d-none d-md-table-cell text-end">2,200,000</td>
                                <td class="text-end">500,000</td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td class="d-none d-md-table-cell">UB0097</td>
                                <td>2022-06-10</td>
                                <td>2022-06-20</td>
                                <td class="text-start">Gia Supplier Boiller</td>
                                <td class="d-none d-md-table-cell text-end">1,200,000</td>
                                <td class="text-end">200,000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalUtang' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalUtangLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalUtangLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='kode'>Kode Transaksi</label>
                                <input type='text' class='form-control' name='kode' id='kode'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='tgl'>Tanggal</label>
                                <input type='text' class='form-control' name='tgl' id='tgl'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='suplier'>Supplier</label>
                                <input type='text' class='form-control' name='suplier' id='suplier'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='jumlah'>Jumlah</label>
                                <input type='text' class='form-control' name='jumlah' id='jumlah'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='transaksi'>Transaksi</label>
                                <input type='text' class='form-control' name='transaksi' id='transaksi'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='ket'>Keterangan</label>
                                <input type='text' class='form-control' name='ket' id='ket'>
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
        $('#tgl').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd'
        });
    });

    const formatCurrency = (str) => ("" + str).replace(/[^\d.]/g, "").replace(/^(\d*\.)(.*)\.(.*)$/, '$1$2$3').replace(/\.(\d{2})\d+/, '.$1').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    const parseCurrency = (str) => str.replace(/,/g, '');
    $('#jumlah').keyup(function(event) {
        if (event.which >= 37 && event.which <= 40) return;
        $(this).val((i, v) => formatCurrency(v));
        // $('#amon').val(parseCurrency($("#jumlah").val()));
    });
</script>