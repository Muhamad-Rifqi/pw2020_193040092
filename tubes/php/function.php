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
        while ($row = mysqli_fetch_assoc($result))
        {
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

    $queryubah = "UPDATE makanan SET 
            Gambar = '$gambar',
            Nama = '$nama',
            Asal = '$asal',
            Deskripsi = '$deskripsi',
            Harga = '$harga'
            WHERE  id = '$id' ";

    mysqli_query($conn, $queryubah);
    return mysqli_affected_rows($conn);
}

// Mencari Data
function cari($keyword) {
    $query = "SELECT * FROM makanan
                WHERE
                gambar LIKE '%$keyword%' OR
                nama Like '%$keyword%' OR
                asal Like '%$keyword%' OR
                deskripsi Like '%$keyword%' OR
                harga LIKE '%$keyword%'
                ";

                return query($query);
}

function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Menegecek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username sudah di gunakan');
            </script>";
            return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO  user VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>    