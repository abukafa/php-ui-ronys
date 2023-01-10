<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Menu</strong></h1>

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
                            <a href="#" class="btn btn-primary inputMenu" data-bs-toggle="modal" data-bs-target="#modalMenu"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Cabang</th>
                                <th class="d-none d-md-table-cell">Kode</th>
                                <th>Nama Menu</th>
                                <th>Harga Jual</th>
                                <th class="d-none d-md-table-cell">Kategori</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>RFC Pusat</td>
                                <td class="d-none d-md-table-cell">M001</td>
                                <td class="text-start">Chicken Steak</td>
                                <td>15.000</td>
                                <td class="d-none d-md-table-cell text-start">Satuan</td>
                                <td>
                                    <img src="../../public/menu/4.jpg" class="avatar img-fluid rounded-circle" /> <span class="text-dark"></span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMenu" data-bs-toggle="modal" data-bs-target="#modalMenu"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>RFC Pusat</td>
                                <td class="d-none d-md-table-cell">M002</td>
                                <td class="text-start">Coca Cola</td>
                                <td>10.000</td>
                                <td class="d-none d-md-table-cell text-start">Minuman</td>
                                <td>
                                    <img src="../../public/menu/2.jpg" class="avatar img-fluid rounded-circle" /> <span class="text-dark"></span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMenu" data-bs-toggle="modal" data-bs-target="#modalMenu"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>RFC Pusat</td>
                                <td class="d-none d-md-table-cell">M003</td>
                                <td class="text-start">Pepsi</td>
                                <td>9.000</td>
                                <td class="d-none d-md-table-cell text-start">Minuman</td>
                                <td>
                                    <img src="../../public/menu/3.jpg" class="avatar img-fluid rounded-circle" /> <span class="text-dark"></span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMenu" data-bs-toggle="modal" data-bs-target="#modalMenu"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMenuLabel">Tambah Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class='mb-2'>
                                <label class='form-label' for='cabang'>Cabang</label>
                                <input type='text' class='form-control' name='cabang' id='cabang'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='kode'>Kode Barang</label>
                                <input type='text' class='form-control' name='kode' id='kode'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='barang'>Nama Barang</label>
                                <input type='text' class='form-control' name='barang' id='barang'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='kategori'>Kategori</label>
                                <select type='text' class='form-select' name='kategori' id='kategori'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                    <option>Satuan</option>
                                </select>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='harga'>Harga Jual</label>
                                <input type='text' class='form-control' name='harga' id='harga'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='foto'>Gambar Menu</label>
                                <input type='file' class='form-control' name='foto' id='foto' accept='.jpg' onchange='preview()'>
                                <br><img width="100%" class="preview"><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
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
    function preview() {
        const img = document.querySelector('#foto');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(img.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
    $(function() {
        $('.inputMenu').on('click', function() {
            $('#modalMenuLabel').html('Tambah Data <b>Menu</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#cabang').val('');
            $('#kode').val('');
            $('#barang').val('');
            $('#kategori').val('');
            $('#harga').val('');
            $('#foto').val('');
            $('.preview').removeAttr('src');
        });
    })
    $(function() {
        $('.editMenu').on('click', function() {
            $('#modalMenuLabel').html('Ubah Data <b>Menu</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#cabang').val('RFC Pusat');
            $('#kode').val('M001');
            $('#barang').val('Chicken Steak');
            $('#kategori').val('Makanan');
            $('#harga').val('15.000');
            $('#foto').val('');
            $('.preview').attr('src', '../../public/menu/4.jpg');
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