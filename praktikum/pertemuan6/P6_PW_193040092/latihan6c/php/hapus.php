<?php
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

    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
?>