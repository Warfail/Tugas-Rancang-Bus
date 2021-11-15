<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Bus</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script>
        var base_url = window.location.origin;
    </script>
</head>

<body>


    <!-- Content -->
    <!-- <br> -->

    <br>
    <div class="row" style="width:100%">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="row g-2">
                    <div class="col-md-12">
                        <h1>Daftar Bus</h1>
                        <hr>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="table-data" class="table table-hover table-striped" style="width:100%">
                                <thead>
                                    <th>ID Bus</th>
                                    <th>Nama Bus</th>
                                    <th>Jam Berangkat</th>
                                    <th>Jam Tiba</th>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Harga Tiket</th>
                                    <th>Jumlah Kursi</th>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $data) : ?>
                                        <tr>
                                            <td><?= $data['id_bus']; ?></td>
                                            <td><?= $data['nama_bus']; ?></td>
                                            <td><?= $data['jam_berangkat']; ?></td>
                                            <td><?= $data['jam_tiba']; ?></td>
                                            <td><?= $data['dari']; ?></td>
                                            <td><?= $data['ke']; ?></td>
                                            <td><?= $data['harga_tiket']; ?></td>
                                            <td><?= $data['jumlah_kursi']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--/.Content-->

    <!-- script-->
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