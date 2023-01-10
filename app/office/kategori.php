<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Kategori Menu</strong></h1>

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
                            <a href="#" class="btn btn-primary inputKategori" data-bs-toggle="modal" data-bs-target="#modalKategori"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Cabang</th>
                                <th>Kategori</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td class="text-start">RFC Pusat</td>
                                <td class="text-start">Geprek</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editKategori" data-bs-toggle="modal" data-bs-target="#modalKategori"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td class="text-start">RFC Pusat</td>
                                <td class="text-start">Hot Cheesy</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editKategori" data-bs-toggle="modal" data-bs-target="#modalKategori"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td class="text-start">RFC Pusat</td>
                                <td class="text-start">Hot Wings</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editKategori" data-bs-toggle="modal" data-bs-target="#modalKategori"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalKategori' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalKategoriLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalKategoriLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='cabang'>Cabang</label>
                                <input type='text' class='form-control' name='cabang' id='cabang'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Kategori</label>
                                <input type='text' class='form-control' name='nama' id='nama'>
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
        $('.inputKategori').on('click', function() {
            $('#modalKategoriLabel').html('Tambah Data <b>Kategori</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#cabang').val('');
            $('#nama').val('');
        });
    })
    $(function() {
        $('.editKategori').on('click', function() {
            $('#modalKategoriLabel').html('Ubah Data <b>Kategori</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#cabang').val('RFC Pusat');
            $('#nama').val('Geprek');
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