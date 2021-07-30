<?php
include 'database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/interface.css">
    <title>Patch</title>
</head>
<body>
    <div class="loader">
		<div class="spinner"></div>
	</div>
    <div class="container">
        <h3 class="header center-text neou block">Patch data user</h3>
        <form action="proses.php?aksi=update" method="POST"  class="neou" autocomplete="off">
            <?php
            foreach($db->getById($_GET['id']) as $d){
            ?>
            <input type="hidden" name="id" value="<?php echo $d['id']?>">
            <div class="input-group">
                <input type="text" name="nama" value="<?php echo $d['nama']?>" class="input-text" placeholder="Nama">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="alamat" value="<?php echo $d['alamat']?>" class="input-text" placeholder="Alamat">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="usia" value="<?php echo $d['usia']?>" class="input-text" placeholder="Usia">
            </div>
            <br>
            <button type="submit" value="Simpan" onclick="input()">simpan</button>
            <?php } ?>
        </form>
    </div>
    <script src="js/loader.js"></script>
    <script src="js/alerts.js"></script>
</body>
</html>