<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Bus</title>
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script>
        var base_url = window.location.origin;
    </script>
</head>

<body>
    <br>
    <div class="container">
        <h1>Edit Bus</h1>
        <hr>
        <form action="#" method="post">
            <div class=col-4>
                <div class="mb-3">
                    <label for="formGroupExampleInput">ID Bus:</label>
                    <input type="text" class="form-control" name="id_bus" id="formGroupExampleInput" placeholder="ID bus" value="<?= substr($datas2['id_bus'], 0, 4) . str_pad((int)substr($datas2['id_bus'], 5) + 1, 5, '0', STR_PAD_LEFT); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama">Nama Bus:</label>
                    <input type="text" class="form-control" name="nama_bus" placeholder="nama bus" required>
                </div>
                <div class="mb-3">
                    <label for="berangkat">Waktu Berangkat</label>
                    <input type="datetime-local" class="form-control" name="jam_berangkat" placeholder="jam keberangkatan" required>
                </div>
                <div class="mb-3">
                    <label for="tiba">Waktu Tiba</label>
                    <input type="datetime-local" class="form-control" name="jam_tiba" placeholder="jam tiba" required>
                </div>
                <div class="mb-3">
                    <label for="dari">Dari:</label>
                    <input type="text" class="form-control" name="dari" placeholder="lokasi penjemputan" required>
                </div>
                <div class="mb-3">
                    <label for="ke">Ke:</label>
                    <input type="text" class="form-control" name="ke" placeholder="Arah Destinasi" required>
                </div>
                <div class="mb-3">
                    <label for="HargaTiket">Harga Tiket</label>
                    <input type="Number" class="form-control" name="harga_tiket" placeholder="Harga tiket" required>
                </div>
                <div class="mb-3">
                    <label for="kursi">Jumlah Kursi:</label>
                    <input type="Number" class="form-control" name="jumlah_kursi" placeholder="status lowongan" required>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
    </div>


</body>

</html>