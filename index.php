<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Daftar Barang </title>
</head>

<body>
    <div class='header'>
        <div class='logo'>
            <h1>Online Shop</h1>
        </div>
    </div>
    <table width='80%' border=1>
    <tr>
        <th>Nama Barang</th> <th>Kode Barang</th> <th>Stok</th> <th>Update</th>
    </tr>
<?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['kode_barang']."</td>";
        echo "<td>".$user_data['jumlah_barang']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a> | <a href='add.php?id=$user_data[id]'>Add</a> | <a href='index.php?id=$user_data[id]'>Update</a> </td></tr>";        
    }
?>
    </table>
</div>
</body>
</html>