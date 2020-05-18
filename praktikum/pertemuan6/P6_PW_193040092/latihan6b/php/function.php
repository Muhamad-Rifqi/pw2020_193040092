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
        $asal = htmlspecialchars($data['Asal']);
        $deskripsi = htmlspecialchars($data['Deskripsi']);
        $harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO makanan
                        VALUES
                        ('', '$gambar', '$nama', '$asal', '$deskripsi', '$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>    