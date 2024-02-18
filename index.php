
<?php
//inisialisasi session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GH</title>
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
  <!-- link bootstrep -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
  /* Form styling */
  .form-class {
    border: 1px solid #ddd; /* Warna border */
    padding: 30px; /* Meningkatkan padding */
    background-color: #f8f9fa; /* Warna background */
    border-radius: 10px; /* Meningkatkan border-radius */
  }

  .form-group {
    margin-bottom: 30px; /* Meningkatkan margin-bottom */
  }

  label {
    font-weight: bold;
    font-size: 18px; /* Meningkatkan ukuran font */
  }

  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 15px; /* Meningkatkan padding */
    border: 2px solid #ced4da; /* Meningkatkan ketebalan border input */
    border-radius: 6px; /* Meningkatkan border-radius */
    box-sizing: border-box;
    background-color: #fff; /* Warna background input */
    font-size: 16px; /* Meningkatkan ukuran font */
  }

  button {
    background-color: #007bff; /* Warna background tombol */
    color: #fff;
    padding: 15px 30px; /* Meningkatkan padding */
    border: none;
    border-radius: 6px; /* Meningkatkan border-radius */
    cursor: pointer;
    font-size: 18px; /* Meningkatkan ukuran font */
  }

  button:hover {
    background-color: #0056b3; /* Warna background tombol saat hover */
  }
</style>



</head>

<body>
  
<!-- ======= Top Bar ======= -->
  <?php
  include ('top-header/top-bar.php');
  ?>
  <!-- ======= Top Bar end ======= -->

  <!-- ======= Header ======= -->
  <?php
  include ('top-header/header.php');?>
  
  <!-- End Header -->
          
<!-- ======= Hero Section ======= -->
  <?php
  include ('top-header/slide-section.php');
  ?>
  <!-- End Hero -->

  <main id="main">

  <!-- ======= Featured Services Section ======= -->
  <?php
  include ('top-header/about.php');
  ?>
    <!-- End Featured Services Section -->

    <!-- ======= Our Clients Section ======= -->
    <?php
    include('top-header/client.php');
    ?>
    ><!-- End Our Clients Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Layanan Perusahaan Greenhouse Pengetahuan Tentang Tanaman Tentang Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>SMKN 64 Jakarta</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>GreenHouse@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 81287724524</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.106411678014!2d106.86680617499059!3d-6.249706893738705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f34a18a336c7%3A0x3a85f62d85e1ba8a!2sSMK%20Negeri%2064%20Jakarta%20Timur!5e0!3m2!1sid!2sid!4v1699875264271!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

                  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form id="form-id" class="form-class" method="post" action="" role="form">
                            <div class="form-group">
                                <label for="name" class="label">Name</label>
                                <div class="input-group">
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="label">Email</label>
                                <div class="input-group">
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact" class="label">Contact</label>
                                <div class="input-group">
                                    <input type="text" id="contact" name="contact" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="label">Address</label>
                                <div class="input-group">
                                    <textarea id="address" name="address" class="form-control" rows="6" maxlength="3000"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>

                    <?php
          include('koneksi.php');
          if(isset($_POST['submit'])){

          //Fetching variables of the form which travels in URL
            include('koneksi.php');
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            
          //Insert Query of SQL
            $query = mysqli_query($con, "insert customer(customer_name, customer_email, customer_contact, customer_address) values ('$name', '$email', '$contact', '$address')");
         
            }
        
          
          ?>

                  </form>
         
          


              </div>

            </form>
          </div>
         </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>GreenHouse Tbk</h3>
      <p>Follow Akun Sosial Media kami </p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>GreenHouse Tbk</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



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