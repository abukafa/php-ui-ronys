<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Input <strong>Pembelian Bahan</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- FORM filter Pencarian -->
                        <form class="row" action="" method="post">
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='id'>Kode Transaksi</label>
                                <input type='text' class='form-control' name='id' id='id' value="BL000365" readonly>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='kode'>Kode Bahan</label>
                                <select type='text' class='form-select' name='kode' id='kode'>
                                    <option value=''>.. pilih ..</option>
                                    <option value="FF325">FF325 - Ayam Marinasi</option>
                                    <option value="DF399">DF399 - Tepung terigu</option>
                                    <option value="SS641">SS641 - Merica</option>
                                </select>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='bahan'>Nama Bahan</label>
                                <input type='text' class='form-control' name='bahan' id='bahan' readonly>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='qty'>Qty</label>
                                <div class="input-group">
                                    <input type='text' class='form-control' name='qty' id='qty'>
                                    <input type='text' class='form-control' name='satuan' id='satuan'>
                                </div>
                            </div>
                            <div class='col-3 col-md-2 mb-2'>
                                <label class='form-label' for='harga'>Harga</label>
                                <input type='text' class='form-control' name='harga' id='harga'>
                            </div>
                            <div class='col-3 col-md-2 mb-2'>
                                <label class='form-label' for='diskon'>Discount</label>
                                <input type='text' class='form-control' name='diskon' id='diskon'>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='jumlah'>Jumlah</label>
                                <input type='text' class='form-control' name='jumlah' id='jumlah' readonly>
                            </div>
                            <div class="text-center mt-2">
                                <a href="" class="btn btn-primary">Post</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Bahan</th>
                                <th class="d-none d-md-table-cell">Harga</th>
                                <th class="d-none d-md-table-cell">Diskon</th>
                                <th>Qty</th>
                                <th>Jumlah</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>FF325</td>
                                <td class="text-start">Ayam Marinasi</td>
                                <td class="d-none d-md-table-cell text-end">45,000</td>
                                <td class="d-none d-md-table-cell text-end">0</td>
                                <td>1 Kg</td>
                                <td class="text-end">45,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                        <form class="row" action="">
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='suplier'>Supplier</label>
                                <select type='text' class='form-select' name='suplier' id='suplier'>
                                    <option value=''>.. pilih ..</option>
                                </select>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='tanggal'>Tanggal</label>
                                <input type='text' class='form-control' name='tanggal' id='tanggal'>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='tempo'>Tempo</label>
                                <input type='text' class='form-control' name='tempo' id='tempo'>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='tipe'>Pembayaran</label>
                                <select type='text' class='form-select' name='tipe' id='tipe'>
                                    <option value=''>.. pilih ..</option>
                                    <option>Lunas</option>
                                    <option>Tempo</option>
                                </select>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='ket'>Total</label>
                                <input type='text' class='form-control' name='ket' id='ket' value="45,000" readonly>
                            </div>
                            <div class='col-6 col-md-4 mb-2'>
                                <label class='form-label' for='ket'>Keterangan</label>
                                <input type='text' class='form-control' name='ket' id='ket'>
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
                                <label class='form-label' for='id'>ID Relasi</label>
                                <input type='text' class='form-control' name='id' id='id'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Relasi</label>
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
    $('#kode').on('change', function() {
        const kode = $(this).val();
        const bahan = kode == 'FF325' ? 'Ayam Marinasi' : kode == 'SS641' ? 'Merica' : 'Tepung terigu';
        const satuan = kode == 'SS641' ? 'Pck' : 'Kg';
        const harga = kode == 'SS641' ? '35000' : '42000';
        $('#bahan').val(bahan);
        $('#satuan').val(satuan);
        $('#harga').val(harga);
        $('#diskon').val('0');
        $('#qty').focus();
    })
    $('#qty').on('keyup', function() {
        $('#jumlah').val($('#harga').val() * $('#qty').val() - $('#diskon').val());
    })
    $('#diskon').on('keyup', function() {
        $('#jumlah').val($('#harga').val() * $('#qty').val() - $('#diskon').val());
    })
    $('#harga').on('keyup', function() {
        $('#jumlah').val($('#harga').val() * $('#qty').val() - $('#diskon').val());
    })
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