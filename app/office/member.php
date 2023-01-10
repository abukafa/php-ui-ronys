<?php
require '../template/header.php';
?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Data <strong>Member</strong></h1>

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
                            <a href="#" class="btn btn-primary inputMember" data-bs-toggle="modal" data-bs-target="#modalMember"><span data-feather="feather"></span></a>
                            <a href="#" class="btn btn-primary"><span data-feather="printer"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-sm table-bordered">
                            <tr class="table-active text-center">
                                <th>No</th>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th>Nama</th>
                                <th class="d-none d-md-table-cell">Alamat</th>
                                <th>Telepon</th>
                                <th>Opsi</th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td class="d-none d-md-table-cell">BRG01</td>
                                <td class="text-start">Aceng Komara</td>
                                <td class="d-none d-md-table-cell text-start">Jln Kujang No. 12 Cikoneng Ciamis</td>
                                <td>087723436655</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMember" data-bs-toggle="modal" data-bs-target="#modalMember"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td class="d-none d-md-table-cell">BRG02</td>
                                <td class="text-start">Ridwan Muharom</td>
                                <td class="d-none d-md-table-cell text-start">Jln Benteng No. 167 Ciamis</td>
                                <td>087723436734</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMember" data-bs-toggle="modal" data-bs-target="#modalMember"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td class="d-none d-md-table-cell">BRG03</td>
                                <td class="text-start">Maemunah</td>
                                <td class="d-none d-md-table-cell text-start">Jln Cipedes No. 23 Tasikmalaya</td>
                                <td>087723430932</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success editMember" data-bs-toggle="modal" data-bs-target="#modalMember"><span data-feather="edit"></span></a>
                                    <a href="#" class="btn btn-sm btn-danger delete"><span data-feather="trash"></span></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='modalMember' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='modalMemberLabel' aria-hidden='true' style='display: none;'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalMemberLabel'></h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <form action='' method='post'>
                        <div class='modal-body'>
                            <div class='mb-2'>
                                <label class='form-label' for='id'>ID Member</label>
                                <input type='text' class='form-control' name='id' id='id'>
                            </div>
                            <div class='mb-2'>
                                <label class='form-label' for='nama'>Nama Member</label>
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
        $('.inputMember').on('click', function() {
            $('#modalMemberLabel').html('Tambah Data <b>Member</b>');
            $('.modal-footer button[type=submit]').html('Tambah');
            $('.modal-body form').attr('action', '');
            $('#id').val('');
            $('#nama').val('');
            $('#alamat').val('');
            $('#telepon').val('');
        });
    })
    $(function() {
        $('.editMember').on('click', function() {
            $('#modalMemberLabel').html('Ubah Data <b>Member</b>');
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