<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Tiket</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script>
        var base_url = window.location.origin;
    </script>
</head>

<br> 
<div class="row" style="width:100%">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="row g-2">
                    <div class="col-md-12, text-center">
                        <h1>Informasi Bus</h1>
                        <hr>
                    </div>
                </div>

<div class="container">
  <form action="" method="POST">
  <div class="form-group">
      <label for="kode">ID Bus:</label>
      <input type="text" class="form-control" name="kode" placeholder="ID bus" required="">
    </div>
    <div class="form-group">
      <label for="nama">Nama Bus:</label>
      <input type="text" class="form-control" name="nama" placeholder="nama bus" required="">
    </div>
    <div class="form-group">
      <label for="berangkat">Jam Berangkat</label>
      <input type="time/date" class="form-control" name="berangkat" placeholder="jam keberangkatan" required="">
    </div>
    <div class="form-group">
      <label for="tiba">Jam Tiba:</label>
      <input type="time/date" class="form-control" name="tiba" placeholder="jam tiba" required="">
      <label for="dari">Dari:</label>
      <input type="text" class="form-control" name="dari" placeholder="lokasi penjemputan" required="">
    </div>
    <div class="form-group">
      <label for="ke">Ke:</label>
      <input type="text" class="form-control" name="ke" placeholder="Arah Destinasi" required="">
    </div>
    <div class="form-group">
      <label for="HargaTiket">Harga Tiket</label>
      <input type="Number" class="form-control" name="HargaTiket" placeholder="Harga tiket" required="">
    </div>
    <div class="form-group">
      <label for="kursi">Jumlah Kursi:</label>
      <input type="Number" class="form-control" name="Kursi" placeholder="status lowongan" required="">
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



    <script>
        $(function() {
            setTimeout(function() {
                $('.msgAlert').hide();
            }, 4000);
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#table-data').DataTable();
        });
    </script>

</body>

</html>