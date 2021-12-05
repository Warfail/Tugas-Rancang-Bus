<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Daftar Pesanan</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Pesanan Bus</h1>
        <hr>
        <form action="../../Pemesanan/prosespesan" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ID Pemesanan</label>
                <input type="text" name="id_pemesanan" class="form-control" readonly id="formGroupExampleInput" placeholder="Example input placeholder" value="<?= substr($datas2['id_pemesanan'], 0, 1) . str_pad((int)substr($datas2['id_pemesanan'], 1) + 1, 6, '0', STR_PAD_LEFT); ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Waktu Reservasi</label>
                <input type="text" name="waktu_reservasi" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" value="<?= date("Y-m-d h:i:s"); ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" id="harga" value="<?= $datas['harga_tiket']; ?>">
                <label for="formGroupExampleInput2" class="form-label">Jumlah</label>
                <input type="number" min="1" name="jumlah" class="form-control" id="jumlah" placeholder="Another input placeholder" oninput="hitungTotal();" value="1">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">ID Bus</label>
                <input type="text" name="id_bus" class="form-control" id="formGroupExampleInput2" readonly placeholder="Another input placeholder" value="<?= $datas['id_bus']; ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="total_bayar" placeholder="Another input placeholder">
            </div>
            <input type="hidden" name="username" class="form-control" id="username" placeholder="<?= user_id() ?>" value="<?= user_id() ?>">
            <input type="submit" value="Pesan sekarang">
        </form>
    </div>
</body>
<script>
    function hitungTotal() {
        let jumlah = document.getElementById("jumlah").value;
        //console.log(jumlah);
        let harga = document.getElementById("harga").value;
        let total = jumlah * harga;
        document.getElementById("total_bayar").value = total;
    }
</script>

</html>