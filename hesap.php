<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyonu</title>
</head>
<body>
    <div class="hesabim_content">
        <div class="label">
            <label>Adı Soyadı</label>
            <input type="text" placeholder="<?php  echo $kullanicicek['kullanici_adsoyad'];?>">
        </div>
       
        <div class="label">
            <label>Tc No</label>
            <input type="text" placeholder="<?php  echo $kullanicicek['kullanici_tc'];?>">
        </div>
       
      
        <button type="submit">Güncelle</button>
    </div>
</body>
</html>