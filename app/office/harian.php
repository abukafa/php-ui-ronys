<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Kas Harian</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group col-12 col-lg-4">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <input type="text" class="form-control" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" onchange>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary inputHarian" data-bs-toggle="modal" data-bs-target="#modalHarian"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="d-none d-md-table-cell"></th>
                                <th class="d-none d-md-table-cell"></th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td></td>
                                <td></td>
                                <td class="text-start"></td>
                                <td class="d-none d-md-table-cell"></td>
                                <td class="d-none d-md-table-cell text-start"></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editHarian" data-bs-toggle="modal" data-bs-target="#modalHarian"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalHarian' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalHarianLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalHarianLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='id'>ID Harian</label>
                                <input type='text' class='form-control' name='id' id='id'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Harian</label>
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

<script>
    $(function() {
        $('.inputHarian').on('click', function() {
            $('#modalHarianLabel').html('Tambah Data <b>Harian</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#nama').val('');
            $('#alamat').val('');
            $('#telepon').val('');
        });
    })
    $(function() {
        $('.editHarian').on('click', function() {
            $('#modalHarianLabel').html('Ubah Data <b>Harian</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#id').val('M001');
            $('#nama').val('Aceng Komara');
            $('#alamat').val('Jln. Kujang Cikoneng Ciamis');
            $('#telepon').val('086633442222');
        });
    })
</script>