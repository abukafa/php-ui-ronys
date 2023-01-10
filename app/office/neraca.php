<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Laporan <strong>Neraca</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row">
                        <!-- FORM filter Pencarian -->
                        <form class="col-12 col-md-4" action="" method="post">
                            <div class="input-group">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <select type="text" class="form-select" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" onchange="this.form.submit()">
                                    <option value="">.. cabang ..</option>
                                    <option>RFC Pusat</option>
                                    <option>RFC Juanda</option>
                                    <option>RFC Yudha</option>
                                </select>
                                <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h3><?= isset($_POST['cari']) ? $_POST['cari'] : 'Silahkan pilih Outlet Cabang !' ?></h3>
                        </div>
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>Aktiva</th>
                                <th></th>
                                <th>Pasiva</th>
                                <th></th>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">Kas Harian</td>
                                <td class="text-end">0</td>
                                <td class="text-start">Utang Usaha</td>
                                <td class="text-end">0</td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">Persediaan</td>
                                <td class="text-end">0</td>
                                <td class="text-start"></td>
                                <td class="text-end"></td>
                            </tr>
                            <tr class="table-active text-center">
                                <th class="text-start">Aktiva Lancar</th>
                                <th class="text-end">0</th>
                                <th class="text-start">Utang</th>
                                <th class="text-end">0</th>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">Gedung</td>
                                <td class="text-end">0</td>
                                <td class="text-start">Modal</td>
                                <td class="text-end">0</td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">Peralatan</td>
                                <td class="text-end">0</td>
                                <td class="text-start">Prive</td>
                                <td class="text-end">0</td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">Tanah</td>
                                <td class="text-end">0</td>
                                <td class="text-start"></td>
                                <td class="text-end"></td>
                            </tr>
                            <tr class="table-active text-center">
                                <th class="text-start">Aktiva Tetap</th>
                                <th class="text-end">0</th>
                                <th class="text-start">Modal</th>
                                <th class="text-end">0</th>
                            </tr>
                            <tr class="table-active text-center">
                                <th class="text-start">Total Aktiva</th>
                                <th class="text-end">0</th>
                                <th class="text-start">Total Pasiva</th>
                                <th class="text-end">0</th>
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
                                <label class='form-label' for='id'>ID Utang</label>
                                <input type='text' class='form-control' name='id' id='id'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Utang</label>
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
        $('.inputUtang').on('click', function() {
            $('#modalUtangLabel').html('Tambah Data <b>Utang</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#nama').val('');
            $('#alamat').val('');
            $('#telepon').val('');
        });
    })
    $(function() {
        $('.editUtang').on('click', function() {
            $('#modalUtangLabel').html('Ubah Data <b>Utang</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#id').val('M001');
            $('#nama').val('Aceng Komara');
            $('#alamat').val('Jln. Kujang Cikoneng Ciamis');
            $('#telepon').val('086633442222');
        });
    })
</script>