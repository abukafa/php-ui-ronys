<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Kas Bank</strong></h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-md-flex justify-content-between">
                        <!-- FORM filter Pencarian -->
                        <form action="" method="post">
                            <div class="input-group col-12 col-lg-4">
                                <span class="input-group-text"><span data-feather="search"></span></span>
                                <select type="text" class="form-select" name="cari" id="cari" placeholder="Pencarian" autocomplete="off" style="max-width:50%;" onchange>
                                    <option value="">.. item kas ..</option>
                                    <option>Beban Admin Bank</option>
                                    <option>Beban Bahan Baku</option>
                                    <option>Beban Inventaris</option>
                                    <option>Beban Lain-lain</option>
                                </select>
                                <input type="text" class="form-control" name="tgl_awl" id="tgl_awl" placeholder="Tgl awal" autocomplete="off" style="max-width:25%;" onchange>
                                <input type="text" class="form-control" name="tgl_ahr" id="tgl_ahr" placeholder="Tgl ahir" autocomplete="off" style="max-width:25%;" onchange>
                            </div>
                        </form>
                        <div class="btn-group mt-2 mt-md-0">
                            <a href="#" class="btn btn-primary inputTunai" data-bs-toggle="modal" data-bs-target="#modalTunai"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th class="d-none d-md-table-cell">Kode</th>
                                <th class="d-none d-md-table-cell">Uraian</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>2022-06-17</td>
                                <td class="d-none d-md-table-cell">BB7690</td>
                                <td class="text-start d-none d-md-table-cell">Tepung terigu 2 Krg</td>
                                <td class="text-end">0</td>
                                <td class="text-end">280,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editTunai" data-bs-toggle="modal" data-bs-target="#modalTunai"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>2022-06-19</td>
                                <td class="d-none d-md-table-cell">SS7666</td>
                                <td class="text-start d-none d-md-table-cell">Sewa Gedung Juni-2022</td>
                                <td class="text-end">0</td>
                                <td class="text-end">3,000,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editTunai" data-bs-toggle="modal" data-bs-target="#modalTunai"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>2022-06-19</td>
                                <td class="d-none d-md-table-cell">BO7612</td>
                                <td class="text-start d-none d-md-table-cell">Tong sampah</td>
                                <td class="text-end">0</td>
                                <td class="text-end">30,000</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editTunai" data-bs-toggle="modal" data-bs-target="#modalTunai"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalTunai' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalTunaiLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalTunaiLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='id'>Kode Transaksi</label>
                                <input type='text' class='form-control' name='id' id='id' value="KT0012" readonly>
                            </div>
                            <div class="row">
                                <div class='col-6 mb-2'>
                                    <label class='form-label' for='jenis'>Jenis Transaksi</label>
                                    <select type='text' class='form-select' name='jenis' id='jenis'>
                                        <option value=''>.. pilih ..</option>
                                        <option>Pengeluaran</option>
                                        <option>Pendapatan</option>
                                        <option>Mutasi</option>
                                    </select>
                                </div>
                                <div class='col-6 mb-2'>
                                    <label class='form-label' for='ket'>Keterangan</label>
                                    <select type='text' class='form-select' name='ket' id='ket'>
                                        <option value=''>.. pilih ..</option>
                                    </select>
                                </div>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='tgl'>Tanggal</label>
                                <input type='text' class='form-control' name='tgl' id='tgl'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='uraian'>Uraian</label>
                                <input type='text' class='form-control' name='uraian' id='uraian'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='jumlah'>Jumlah</label>
                                <input type='text' class='form-control' name='jumlah' id='jumlah'>
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

    $(function() {
        $('.inputTunai').on('click', function() {
            $('#modalTunaiLabel').html('Tambah Data <b>Kas Tunai</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#jenis').val('');
            $('#ket').empty();
            $('#tgl').val('');
            $('#uraian').val('');
            $('#jumlah').val('');
        });
    })
    $(function() {
        $('.editTunai').on('click', function() {
            $('#modalTunaiLabel').html('Ubah Data <b>Kas Tunai</b>');
            $('.modal-footer button[type=submit]').html('Ubah');
            $('.modal-body form').attr('action', '');
            $('#id').val('KT0010');
            $('#jenis').val('Pengeluaran');
            $('#ket').empty();
            $('#ket').append('<option>Beban Bahan Baku</option>');
            $('#tgl').val('2022-06-20');
            $('#uraian').val('Tepung terigu 2 Krg');
            $('#jumlah').val('280,000');
        });
    })
    $(document).ready(function() {
        $("#jenis").change(function() {
            var jenis = $(this).val();
            $('#ket').empty();
            if (jenis == "Pengeluaran") {
                $('#ket').append('<option>Beban Admin Bank</option>');
                $('#ket').append('<option>Beban Bahan Baku</option>');
                $('#ket').append('<option>Beban Lain-lain</option>');
            } else if (jenis == "Mutasi") {
                $('#ket').append('<option>BRI</option>');
                $('#ket').append('<option>BSI</option>');
                $('#ket').append('<option>Kas Mitra</option>');
            } else {
                $('#ket').append('<option>Sales</option>');
                $('#ket').append('<option>Pendapatan Lain-lain</option>');
            }

        });
    });
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