<?php

include ('koneksi.php');

if (isset($_POST['simpan'])) {
    $idtanaman = $_POST['idtanaman'];
    $nmtanaman = $_POST['nmtanaman'];
    $metodetanaman = $_POST['metodetanaman'];
    $jumlahtanaman = $_POST['jumlahtanaman'];
    $ukurantanaman = $_POST['ukurantanaman'];
    $con->query("INSERT INTO tb_alat (idtanaman, nmtanaman, metodetanaman, jumlahtanaman, ukurantanaman) values ('$idtanaman','$nmtanaman','$metodetanaman','$jumlahtanaman','$ukurantanaman')");
    header('location:tabletanaman.php');
}

if (isset($_GET['idtanaman'])) {
    $idtanaman = $_GET['idtanaman'];
    $con->query("DELETE FROM tb_alat where idtanaman = '$idtanaman'");
    header("location:tabletanaman.php");
}

if (isset($_POST['edit'])) {
    $idtanaman = $_POST['idtanaman'];
    $nmtanaman = $_POST['nmtanaman'];
    $metodetanaman = $_POST['metodetanaman'];
    $jumlahtanaman = $_POST['jumlahtanaman'];
    $ukurantanaman = $_POST['ukurantanaman'];
    $con->query("UPDATE tb_alat SET idtanaman='$idtanaman', nmtanaman='$nmtanaman', metodetanaman='$metodetanaman', jumlahtanaman='$jumlahtanaman',ukurantanaman='$ukurantanaman'");

    header("location:tabletanaman.php");
}

?>
