<?php
    // Function Untuk melakukan koneksi ke database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke Database Gagal");
        mysqli_select_db($conn, "tubes_193040092") or die ("Database Salah");

        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn , "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

     function tambah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['Nama']);
        $gambar = htmlspecialchars($data['Gambar']);
        $cara = htmlspecialchars($data['Asal']);
        $asal = htmlspecialchars($data['Deskripsi']);
        $harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO makanan
                        VALUES
                        ('', '$Nama', '$gambar', '$Asal', '$Deskripsi', '$Harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['Nama']);
    $gambar = htmlspecialchars($data['Gambar']);
    $cara = htmlspecialchars($data['Asal']);
    $asal = htmlspecialchars($data['Deskripsi']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "UPDATE makanan
            SET 
            nama = '$Nama',
            gambar = '$Gambar',
            cara = '$Asal',
            asal = '$Deskripsi',
            harga = '$Harga'
            WHERE  id = '$id'
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>    