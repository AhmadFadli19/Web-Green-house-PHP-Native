<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data tanaman</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
    require('../prosesdata.php');
    
    ?>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h3>Tambah Data tanaman</h3>
        <form action="tabletanaman.php" method="POST">
          <div class="form-group">
            <label for="idtanaman">ID</label>
            <input type="text" class="form-control mb-3" name="idtanaman" placeholder="id tanaman">
          </div>
          <div class="form-group">
            <label for="nmtanaman">Nama tanaman</label>
            <input type="text" class="form-control mb-3" name="nmtanaman" placeholder="nama tanaman">
          </div>
          <div class="form-group">
            <label for="metodetanaman">Metode Tanam</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="metodetanaman" value="Hidroponik">
              <label class="form-check-label">Hindroponik</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="metodetanaman" value="Non-Hindroponik">
              <label class="form-check-label">Non-Hindroponik</label>
            </div>
          </div>
            <div class="form-group">
                <label for="jumlahtanaman">jumlah tanam</label>
                <input type="text" class="form-control mb-3" name="jumlahtanaman" placeholder="jumlah tanaman">
            </div>
            <div class="form-group">
                <label for="ukurantanaman">ukuran</label>
                <input type="text" class="form-control mb-3" name="ukurantanaman" placeholder="ukuran tanaman">
            </div>
          
          <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>