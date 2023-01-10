<?php
require '../template/header.php';
require '../model/function.php';
flash();
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Barang</strong></h1>

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
                            <a href="#" class="btn btn-primary inputBarang" data-bs-toggle="modal" data-bs-target="#modalBarang"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th class="d-none d-md-table-cell">Kode</th>
                                <th>Barang</th>
                                <th class="d-none d-md-table-cell">Isi</th>
                                <th>Min Stok</th>
                                <th class="d-none d-md-table-cell">Satuan 1</th>
                                <th class="d-none d-md-table-cell">Satuan 2</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td class="d-none d-md-table-cell">BRG01</td>
                                <td class="text-start">Tepung Terigu</td>
                                <td class="d-none d-md-table-cell">30</td>
                                <td>10</td>
                                <td class="d-none d-md-table-cell">Kg</td>
                                <td class="d-none d-md-table-cell">Krg</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editBarang" data-bs-toggle="modal" data-bs-target="#modalBarang"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td class="d-none d-md-table-cell">BRG02</td>
                                <td class="text-start">Tepung Premix</td>
                                <td class="d-none d-md-table-cell">20</td>
                                <td>10</td>
                                <td class="d-none d-md-table-cell">Kg</td>
                                <td class="d-none d-md-table-cell">Krg</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editBarang" data-bs-toggle="modal" data-bs-target="#modalBarang"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td class="d-none d-md-table-cell">BRG03</td>
                                <td class="text-start">Maizena</td>
                                <td class="d-none d-md-table-cell">30</td>
                                <td>10</td>
                                <td class="d-none d-md-table-cell">Kg</td>
                                <td class="d-none d-md-table-cell">Krg</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editBarang" data-bs-toggle="modal" data-bs-target="#modalBarang"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalBarang' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalBarangLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalBarangLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='kode'>Kode Barang</label>
                                <input type='text' class='form-control' name='kode' id='kode'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='barang'>Nama Barang</label>
                                <input type='text' class='form-control' name='barang' id='barang'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='isi'>Isi</label>
                                <input type='text' class='form-control' name='isi' id='isi'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='minim'>Stok Minimum</label>
                                <input type='text' class='form-control' name='minim' id='minim'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='satuan1'>Satuan 1</label>
                                <select type='text' class='form-select' name='satuan1' id='satuan1'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Pcs</option>
                                    <option>Kg</option>
                                    <option>Krg</option>
                                </select>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='satuan2'>Satuan 2</label>
                                <select type='text' class='form-select' name='satuan2' id='satuan2'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Pcs</option>
                                    <option>Kg</option>
                                    <option>Krg</option>
                                </select>
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
        $('.inputBarang').on('click', function() {
            $('#modalBarangLabel').html('Tambah Data <b>Barang</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#kode').val('');
            $('#barang').val('');
            $('#isi').val('');
            $('#minim').val('');
            $('#satuan1').val('');
            $('#satuan2').val('');
        });
    })
    $(function() {
        $('.editBarang').on('click', function() {
            $('#modalBarangLabel').html('Ubah Data <b>Barang</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#kode').val('BGR01');
            $('#barang').val('Tepung Terigu');
            $('#isi').val('15');
            $('#minim').val('10');
            $('#satuan1').val('Kg');
            $('#satuan2').val('Krg');
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