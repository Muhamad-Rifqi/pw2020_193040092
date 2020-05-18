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
                        ('', '$nama', '$gambar', '$asal', '$deskripsi', '$harga')";
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
    $global = $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data['Nama']);
    $gambar = htmlspecialchars($data['Gambar']);
    $asal = htmlspecialchars($data['Asal']);
    $deskripsi = htmlspecialchars($data['Deskripsi']);
    $harga = htmlspecialchars($data['Harga']);

    $queryubah = "UPDATE makanan SET 
            nama = '$Nama',
            gambar = '$Gambar',
            asal = '$Asal',
            deskripsi = '$Deskripsi',
            harga = '$Harga'
            WHERE  id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}
?>    