<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyon</title>
</head>
<body>

<header>
    <h2>Hastane Otomasyonu</h2>
</header>
<div class="tableOuter">
    <h1>Üye Ol</h1>
    <form action="islem.php" method="post">
    <div class="user">
            <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
        </div>
        <div class="user">
            <input type="text" name="kullanici_tc" placeholder="tc kimlik no">
        </div>
        <div class="pass">
            <input type="password" name="kullanici_password" placeholder="Şifre">
        </div>
        <button type="submit" class="sub" id="giris" name="kullanicikaydet">Uye Ol</button>
    </form>
    <a href="index.php"><button type="submit" class="sub" id="uye">Geri Çık</button></a>
</div>
    
</body>
</html>