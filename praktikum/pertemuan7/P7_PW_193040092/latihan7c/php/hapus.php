<?php

session_start();
if (isset($_SESSION['username'])){
	header("location: login.php");
	exit;
}

require 'function.php';
$id = $_GET['id'];

    if (hapus($id) > 0) {
        echo "<script>
                    alert('Data berhasil dihapus!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal dihapus!');
                    document.location.href = 'admin.php';
                </script>";
    }
?>