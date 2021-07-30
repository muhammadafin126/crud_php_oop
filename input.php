<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/interface.css">
    <title>Input</title>
</head>
<body>
    <div class="loader">
		<div class="spinner"></div>
	</div>
    <div class="container">
        <h3 class="header center-text neou block">input data</h3>
        <form action="proses.php?aksi=save" method="POST" class="neou" autocomplete="off">
            <div class="input-group">
                <input type="text" name="nama" class="input-text" placeholder="Nama">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="alamat" class="input-text" placeholder="Alamat">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="usia" class="input-text" placeholder="Usia">
            </div>
            <br>
            <button type="submit" value="Simpan" onclick="input()">simpan</button>
        </form>
    </div>
    <script src="js/loader.js"></script>
    <script src="js/alerts.js"></script>
</body>
</html>