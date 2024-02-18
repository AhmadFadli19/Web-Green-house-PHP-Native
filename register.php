
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php
    // menyertakan file program koneksilogin pada register
    require('koneksi.php');
    // inisialisasi session
    session_start();
    include('koneksi.php');

    $error = '';
    $validate = '';
    if (isset($_SESSION['logingh'])) header('Location: index.php');
    // mengecek apakah data username yang diinputkan user kosong atau tidak
    if (isset($_POST['submit'])) {

        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        // cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($con, $repass);
        // cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if (!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))) {
            // mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if ($password == $repass) {
                // memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if (cek_nama($name, $con) == 0) {
                    // hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    // insert data ke database
                    $query = "INSERT INTO logingh (username,name,email,password) VALUES ('$username','$name','$email','$pass')";
                    $result = mysqli_query($con, $query);
                    // jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;

                        header('Location: login.php');
                    // jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                } else {
                    $error =  'Username sudah terdaftar !!';
                }
            } else {
                $validate = 'Password tidak sama !!';
            }
        } else {
            $error =  'Data tidak boleh kosong !!';
        }
    }

    // fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username, $con)
    {
        $nama = mysqli_real_escape_string($con, $username);
        $query = "SELECT * FROM logingh WHERE username = '$nama'";
        if ($result = mysqli_query($con, $query)) return mysqli_num_rows($result);
    }
    ?>
    <form style="margin-top:150px;" action="register.php" method="POST">
        <div class="container" style="margin-top:4rem;">
            <div class="row justify-content-center">
                <div class="card border-2 border-warning shadow-lg" style="width:35rem; border-radius: 25px;">
                    <div class="card-body">
                        <h2 style="margin-top:4vh; margin-bottom:5vh; text-align:center;">Sign-Up</h2>
                        <?php if ($error != '') { ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                            <?php if ($validate != '') { ?>
                            <p class="text-danger"><?= $validate; ?></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="InputPassword" class="form-label">Re-Password</label>
                            <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Re-Password">
                            <?php if ($validate != '') { ?>
                            <p class="text-danger"><?= $validate; ?></p>
                            <?php } ?>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                        <div class="form-footer mt-2">
                            <p> Sudah punya account? <a href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>
