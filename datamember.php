<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Green Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/logo-gh.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<style>
    body {
      padding: 20px;
    }

    .customer-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .customer-card {
      margin-bottom: 20px;
    }

    .delete-link {
      color: red;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">GreenHouse</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="datamember.php">Home</a></li>
          <li><a class="nav-link scrollto" href="admin/tabletanaman.php">Data Tanaman</a></li>
          <li><a class="nav-link scrollto" href="admin/infotanaman/index.php">Data Pembeli Tanaman</a></li>
          <li><a class="nav-link scrollto " href="datamember.php">Data Orang Yang Bekerja Sama</a></li>
          <li><a class="getstarted scrollto" href="../NodeJS-GH/logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Customer Data ======= -->
  <div class="customer-container">
    <h2 class="mt-3 mb-4">Customer Data</h2>

    <?php
    include('koneksi.php');

    // Query untuk mengambil semua data dari tabel customer
    $query = mysqli_query($con, "SELECT * FROM customer");

    // Mengecek apakah query berhasil dijalankan
    if ($query) {
      // Loop untuk menampilkan data
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<div class="card customer-card">';
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>Name: " . $row['customer_name'] . "</h5>";
        echo "<p class='card-text'><strong>Email:</strong> " . $row['customer_email'] . "</p>";
        echo "<p class='card-text'><strong>Contact:</strong> " . $row['customer_contact'] . "</p>";
        echo "<p class='card-text'><strong>Address:</strong> " . $row['customer_address'] . "</p>";
       
        echo '</div>';
        echo '</div>';
      }
    } else {
      echo "Failed to retrieve data.";
    }

    // Tutup koneksi database
    mysqli_close($con);
    ?>

  </div>

  <!-- ======= Bootstrap JS Scripts ======= -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>