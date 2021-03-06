<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Downloader</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/image/icon/app.ico" type="image/x-icon">
</head>

<body>
    <div class="container mt-4">

        <!-- Menambahkan Alert  -->
        <?php
        session_start();
        if (isset($_SESSION['pesan'])) : ?>

            <div class="alert alert-success"><?= $_SESSION['pesan']; ?></div>

        <?php
            unset($_SESSION['pesan']);
        endif; ?>
        <!-- ---- -->

        <div class="card">
            <div class="card-header">
                <h1 class="text-center font-weight-bold">Aplikasi Auto Downloader</h1>
            </div>
            <div class="card-body">
                <form action="download.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi">Lokasi Tempat Menyimpan</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" value="Download/" class="form-control" disabled>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Absolute Path Dari Root" name="lokasi">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="folder">Nama Folder</label>
                                <div class="row">
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="folder" placeholder="Masukkan Nama Folder" name="folder" REQUIRED>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="btn btn-info w-50" id="today">Hari Ini</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary w-100">Download</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="assets/js/jquery-3.5.1.slim.min.js">
    <link rel="stylesheet" href="assets/js/bootstrap.bundle.min.js">
    <script>
        let folder = document.getElementById("today");
        let isi = document.getElementById("folder");


        let tanggal = new Date();
        let bulan = tanggal.getMonth() + 1;
        let hari = tanggal.getDate();
        let tahun = tanggal.getFullYear();

        today = hari + "-" + bulan + "-" + tahun;

        folder.addEventListener("click", function() {
            isi.setAttribute("value", today);
        });
    </script>
</body>

</html>