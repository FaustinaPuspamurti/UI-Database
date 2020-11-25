<html>
<head>
    <title>Add </title>
</head>

<body>
    <div class="tabel">
    <form action="add.php" method="post" name="form1" class="formadd">
        <table width="40%">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Nama Sepatu</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="jumlah_barang"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah Product"></td>
            </tr>
        </table>
    </form>
</div>
    <?php

    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $kode_barang = $_POST['kode_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(nama_barang,kode_barang,jumlah_barang) VALUES('$nama_barang','$kode_barang','$jumlah_barang')");

         echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>