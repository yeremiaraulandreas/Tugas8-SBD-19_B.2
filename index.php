<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAHOGANI THE OASIS</title>
</head>

<body>
<header>
    <h1>Tabel Data Apartement</h1>
</header>
    <div class="header">
        <div class="main"></div>
    </div>
        <h2>Tabel apartement</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Apartment</th>
                    <th>Unit </th>
                    <th>Harga</th>
                </tr>
            </thead>
            <?php 
            include 'config.php';
            $sql = 'SELECT * FROM apartemen';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_apart']?></td>
                        <td><?php echo $row['unit_apart']?></td>
                        <td><?php echo $row['harga']?></td>
                    </tr>
                </tbody>
                <?php
            }  
            ?>          
        </table>
        
        <h2>Tabel Penyewa</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Penyewa</th>
                    <th>ID apart</th>
                    <th>Tanggal check in</th>
                    <th>Tanggal Check out</th>
                </tr>
            </thead>
            <?php 
            include 'config.php';
            $sql = 'SELECT * FROM penyewa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_penyewa']?></td>
                        <td><?php echo $row['id_apart']?></td>
                        <td><?php echo $row['tgl_chekin']?></td>
                        <td><?php echo $row['tgl_checkout']?></td>
                    </tr>
                </tbody>
                <?php
            }   
            ?>            
        </table>
    
        <h2>Tabel Transaksi</a></h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID penyewa</th>
                    <th>Tanggal transaksi</th>
                    <th>total</th>
                </tr>
            </thead>
            <?php 
            include 'config.php';
            $sql = 'SELECT * FROM trs_sewa';
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query))
            {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_trs']?></td>
                        <td><?php echo $row['id_penyewa']?></td>
                        <td><?php echo $row['tgl_trs']?></td>
                        <td><?php echo $row['total_trs']?></td>
                    </tr>
                </tbody>
                <?php
            }
                ?>
        </table>

        <br>
        <br>
    <footer>
        <p>&copy; 2021 - Universitas pelita bangsa Fakultas Teknik Informatika</p>
    </footer
</body>    
</html>