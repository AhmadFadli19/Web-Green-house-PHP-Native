<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>MyApp | Edit Data Tanaman</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Alat Tanaman</h3>
                <?php
                include ('../prosesdata.php');
                $panggil = $con->query("SELECT * FROM tb_alat WHERE idtanaman = '$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="tabletanaman.php" method="POST">
                    <div class="form-group">
                        <label for="idtanaman">ID</label>
                        <input type="text" class="form-control mb-3" name="idtanaman" value="<?= $row['idtanaman'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmtanaman">Nama</label>
                        <input type="text" class="form-control mb-3" name="nmtanaman" value="<?= $row['nmtanaman'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="metodetanaman">metode tanaman</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="metodetanaman" value="Hidroponik" <?php if ($row['metodetanaman'] === "Hidroponik") {echo "checked";} ?>>Hidropinik
                        </div>
                       <div class="form-check">
                        <input type="radio" class="form-check-input" name="metodetanaman" value="Non-Hidroponik" <?php if ($row['metodetanaman'] === "Non-Hidroponik") {echo "checked";} ?>>Non-Hidroponik
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlahtanaman">Jumlah Tanaman</label>
                        <input type="text" class="form-control mb-3" name="jumlahtanaman" value="<?= $row['jumlahtanaman'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="ukurantanaman">Ukuran</label>
                        <input type="text" class="form-control mb-3" name="ukurantanaman" value="<?= $row['ukurantanaman'] ?>">
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>