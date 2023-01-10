<?php
include_once '../template/header.php';
?>
<main class="content">
    <div class="container-fluid p-0">

        <?php
        if (isset($_GET['pass'])) { ?>
            <h1 class="h3 mb-3">Ganti <strong>Password</strong></h1>
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                            <form action="" method="post">
                                <div class="mt-1 mb-2">
                                    <label class="form-label" for="uname">Username</label>
                                    <input type="text" class="form-control" name="uname" id="uname" value="aceng" readonly>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="lama">Password Lama</label>
                                    <input type="password" class="form-control" name="lama" id="lama" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="baru">Password Baru</label>
                                    <input type="password" class="form-control" name="baru" id="baru" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="lagi">Password Baru</label>
                                    <input type="password" class="form-control" name="lagi" id="lagi" onkeyup="sameCheck()" required>
                                </div>
                                <script>
                                    function sameCheck() {
                                        let pas = document.getElementById('baru');
                                        let rpas = document.getElementById('lagi');
                                        if (rpas.value !== pas.value) {
                                            rpas.className = "form-control is-invalid";
                                        } else if (rpas.value == pas.value) {
                                            rpas.className = "form-control is-valid";
                                        }
                                    };
                                </script>
                                <div>
                                    <button type="submit" name="pass" class="btn btn-success float-end">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h1 class="h3 mb-3">Data <strong>Pengguna</strong></h1>
                <div class="row">
                <?php } ?>

                <div class="col-12 <?= isset($_GET['pass']) == 'pass' ? 'col-lg-9' : '' ?>">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                            <table class="table table-hover table-sm table-bordered">
                                <tr class="table-active text-center">
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th class="d-none d-md-table-cell">Nama</th>
                                    <th class="d-none d-md-table-cell">Cabang</th>
                                    <th>Jabatan</th>
                                    <th>Akses</th>
                                    <th class="d-none d-md-table-cell">Ket</th>
                                </tr>
                                <tr class="text-center">
                                    <td>U001</td>
                                    <td>aceng</td>
                                    <td class="d-none d-md-table-cell">Aceng Komara</td>
                                    <td class="d-none d-md-table-cell">RFC Pusat</td>
                                    <td>Kepala Outlet</td>
                                    <td>Superuser</td>
                                    <td class="d-none d-md-table-cell">User Example</td>
                                </tr>
                                <tr class="text-center">
                                    <td>U002</td>
                                    <td>anom</td>
                                    <td class="d-none d-md-table-cell">Anonymous</td>
                                    <td class="d-none d-md-table-cell">RFC Karangnunggal</td>
                                    <td>Staff Outlet</td>
                                    <td>User</td>
                                    <td class="d-none d-md-table-cell">User Example</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
</main>

<script src="../../assets/js/jquery.min.js"></script>

<?php
include_once '../template/footer.php';
?>