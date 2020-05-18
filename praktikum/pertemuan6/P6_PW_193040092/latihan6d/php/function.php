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


// Fungsi tambah
     function tambah($data)
    {
        $conn = koneksi();

        $gambar = htmlspecialchars($data['Gambar']);
        $nama = htmlspecialchars($data['Nama']);
        $asal = htmlspecialchars($data['Asal']);
        $deskripsi = htmlspecialchars($data['Deskripsi']);
        $harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO makanan
                        VALUES
                        ('', '$gambar', '$nama', '$asal', '$deskripsi', '$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


// Fungsi Hapus
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    
// Fungsi Ubah Data
    function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['Gambar']);
    $nama = htmlspecialchars($data['Nama']);
    $asal = htmlspecialchars($data['Asal']);
    $deskripsi = htmlspecialchars($data['Deskripsi']);
    $harga = htmlspecialchars($data['Harga']);

    $queryubah = "UPDATE makanan
             SET 
            Gambar = '$gambar',
            Nama = '$nama',
            Asal = '$asal',
            Deskripsi = '$deskripsi',
            Harga = '$harga'
            WHERE  id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}
?>    