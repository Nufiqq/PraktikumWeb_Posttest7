<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <title>Daftar Menu</title>
</head>
<body>
    <header>
        <div class="judul">
            <img src="images/logo.png" alt="Starbucks" width="90px">
            <h1>Menu Starbucks</h1>
        </div>
        <div class="akun">
            <a href="login.php">Logout</a>
        </div>
    </header>

    <div class="content">
        <h1>Daftar Menu</h1>
        <div class="searching">
            <form action="" method="get">
                <input type="text" name="search" placeholder="Searching for.." class="search">
                <input type="submit" name="submit" value="cari" class="cari">
            </form>
        </div>

        <div class="tabel">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Tall</th>
                    <th>Grande</th>
                    <th>Venti</th>
                    <th>Gambar</th>
                </tr>
                <?php
                    require "config.php";
                    if(isset($_GET['submit'])){
                        $search = $_GET['search'];
                        $i = 1;
                        $query = mysqli_query($db, "SELECT * FROM menu WHERE nama_menu LIKE'%$search%'");
                        while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td nowrap><?=$row['nama_menu']?></td>
                            <td><?=$row['tall']?></td>
                            <td><?=$row['grande']?></td>
                            <td><?=$row['venti']?></td>
                            <td><img src="Images/<?=$row['gambar']?>" alt="" width="100px"></td>
                        </tr>
                <?php
                        $i++;
                        }
                    } else{
                        $query = mysqli_query($db,"SELECT * FROM menu");
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) {
                ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td nowrap><?=$row['nama_menu']?></td>
                            <td><?=$row['tall']?></td>
                            <td><?=$row['grande']?></td>
                            <td><?=$row['venti']?></td>
                            <td><img src="Images/<?=$row['gambar']?>" alt="" width="100px"></td>
                        </tr>
                <?php
                        $i++;
                        }
                    }
                ?>
            </table>
        </div>
    </div>

</body>
</html>