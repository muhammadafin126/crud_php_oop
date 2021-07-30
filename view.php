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
    <title>Index</title>
</head>
<body>
    <div class="loader">
		<div class="spinner"></div>
	</div>
    <div class="container">
        <h3 class="header center-text neou block">crud oop php</h3>
        <div class="btn-group mv">
            <a href="input.php" class="btn btn-main">input</a>
        </div>
        <table class="neou">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Opsi</th>
            </tr>
            <?php
                $no = 1;
                $users = $db->render();
                if(is_array($users)){
                    foreach($users as $x){
                    ?>
                    <tr>
                        <td class="center-text"><?php echo $no++;?></td>
                        <td class="center-text"><?php echo $x['nama'];?></td>
                        <td class="center-text"><?php echo $x['alamat'];?></td>
                        <td class="center-text"><?php echo $x['usia'];?></td>
                        <td class="center-text opsi">
                            <div class="btn-group">
                                <a class="btn btn-true" href="edit.php?id=<?php echo $x['id'];?>&aksi=edit">EDIT</a>
                                <a class="btn btn-false" href="proses.php?id=<?php echo $x['id'];?>&aksi=destroy" onclick="del()">
                                HAPUS</a>
                            </div>
                        </td>
                    </tr>
                    <?php } } ?>
        </table>
    </div>
    <script src="js/loader.js"></script>
    <script src="js/alerts.js"></script>
</body>
</html>