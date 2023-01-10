<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Relasi Menu</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group col-12 col-lg-4">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <select type="text" class="form-select" name="cari" id="cari" autocomplete="off" onchange="this.form.submit()">
                                    <option>.. nama menu ..</option>
                                    <option>RFC Pusat - Ayam Geprek</option>
                                    <option>RFC Pusat - Sayap</option>
                                    <option>RFC Pusat - Coca Cola</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h4><?= isset($_POST['cari']) ? $_POST['cari'] : 'Silahkan pilih Menu!' ?></h4>
                        </div>
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th class="d-none d-md-table-cell">HPP</th>
                                <th>Qty</th>
                                <th>Jumlah</th>
                                <th>Opsi</th>
                            </tr>
                            <?php if (isset($_POST['cari'])) { ?>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td class="text-start">S Mc Lewis Cabe Sct</td>
                                    <td class="d-none d-md-table-cell text-end">0</td>
                                    <td>1 Pcs</td>
                                    <td class="text-end">500</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success editRelasi" data-bs-toggle="modal" data-bs-target="#modalRelasi"><span data-feather="edit"></span></a>
                                        <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td class="text-start">S Mc Lewis Tomat Sct</td>
                                    <td class="d-none d-md-table-cell text-end">0</td>
                                    <td>1 Pcs</td>
                                    <td class="text-end">500</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success editRelasi" data-bs-toggle="modal" data-bs-target="#modalRelasi"><span data-feather="edit"></span></a>
                                        <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td class="text-start">Sayap FC</td>
                                    <td class="d-none d-md-table-cell text-end">4,270</td>
                                    <td>1 Pcs</td>
                                    <td class="text-end">4,270</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success editRelasi" data-bs-toggle="modal" data-bs-target="#modalRelasi"><span data-feather="edit"></span></a>
                                        <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalRelasi' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalRelasiLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalRelasiLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='menu'>Menu</label>
                                <input type='text' class='form-control' name='menu' id='menu' value="RFC Pusat - Sayap" readonly>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='bahan'>Nama Bahan</label>
                                <input type='text' class='form-control' name='bahan' id='bahan' value="S Mc Lewis Cabe Sct">
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='qty'>Qty</label>
                                <div class="input-group">
                                    <input type='text' class='form-control' name='qty' id='qty' value="1">
                                    <input type='text' class='form-control' name='satuan' id='satuan' value="Pcs">
                                </div>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='jumlah'>Jumlah</label>
                                <input type='text' class='form-control' name='jumlah' id='jumlah' value="500">
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
        $('.inputRelasi').on('click', function() {
            $('#modalRelasiLabel').html('Tambah Data <b>Relasi</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#nama').val('');
            $('#alamat').val('');
            $('#telepon').val('');
        });
    })
    $(function() {
        $('.editRelasi').on('click', function() {
            $('#modalRelasiLabel').html('Ubah Data <b>Relasi</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#id').val('M001');
            $('#nama').val('Aceng Komara');
            $('#alamat').val('Jln. Kujang Cikoneng Ciamis');
            $('#telepon').val('086633442222');
        });
    })
    document.querySelector('.delete').onclick = function() {
        swal({
                title: "Yakin?",
                text: "Data tidak bisa dikembalikan!",
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