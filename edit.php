<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_barang=$_POST['nama_barang'];
    $kode_barang=$_POST['kode_barang'];
    $jumlah_barang=$_POST['jumlah_barang'];

    $result = mysqli_query($mysqli, "UPDATE users SET nama_barang='$nama_barang', kode_barang='$kode_barang', jumlah_barang='$jumlah_barang' WHERE id=$id");

    header("Location: index.php");
}

?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result));
{
    $nama_barang = $user_data['nama_barang'];
    $kode_barang = $user_data['kode_barang'];
    $jumlah_barang = $user_data['jumlah_barang'];

}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <div class="tabel">
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang" value=<?php echo $kode_barang;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="jumlah_barang" value=<?php echo $jumlah_barang;?>></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>