<!DOCTYPE html>
<html>
    <title>Pendaftaran Siswa Baru | UNIVERSITAS GAJAYANA</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
    <header>
        <!-- bagian header template -->
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>UNIVERSITAS GAJAYANA</h1>
    </header>
    <!-- akhir bagian header template -->
    <div class="wrap">
        <!-- bagian menu         -->
        <nav class="menu">

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <!-- akhir bagian menu -->
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
 
<?php endif; ?>

    </body>
</html>