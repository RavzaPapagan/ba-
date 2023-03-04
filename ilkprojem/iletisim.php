<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bağış - iletişim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">  
        <div class="navbar">
            <div class="logo">
                <a href="#">LOGO</a>
            </div>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="hakkımızda.php">Hakkımızda</a></li>
                <li><a href="hizmetler.php">Hizmetler</a></li>
                <li><a href="#">Ürünler</a></li>
                <li><a href="#">İletişim</a></li>
            </ul>
        </div>
        
        <div class="center" style="text-align: center; margin-top:110px;">
            <h3 id="h3iletisim" style="color: white; font-size: 45px; padding: 15px">İletişim</h3>
            <form action="iletisim.php" method="post">
            <div style="background: rgba(255,255,255, 0.3);padding: 30px 20px;border-radius: 10px;margin-bottom: 50px;height: 600px;">
                <div id="form" style="width: 700px;float: left;height: 500px;text-align: left; padding-right:30px;">
                    <div style="width: 45%;float: left; padding-right: 5px;">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control" style=" width: 100%;padding: 10px;font-size: 15px;line-height: 1.5;color: #495057;background-color: azure;margin: 10px;border-radius: 5px;border: 1px solid #ced4da;">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control" style=" width: 100%;padding: 10px;font-size: 15px;line-height: 1.5;color: #495057;background-color: azure;margin: 10px;border-radius: 5px;border: 1px solid #ced4da;">
                    </div>
                        
                    <div style="width: 45%;float: right; padding-left: 5px;">
                        <input type="text" name="email" placeholder="Email adresiniz" required class="form-control" style=" width: 100%;padding: 10px;font-size: 15px;line-height: 1.5;color: #495057;background-color: azure;margin: 10px;border-radius: 5px;border: 1px solid #ced4da;">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control" style=" width: 100%;padding: 10px;font-size: 15px;line-height: 1.5;color: #495057;background-color: azure; margin: 10px;border-radius: 5px;border: 1px solid #ced4da;">
                    </div>

                    <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control" style=" font-family: Arial;width: 100%;padding: 10px;font-size: 15px;line-height: 1.5;color: #495057;background-color: azure; margin: 10px;border-radius: 5px;border: 1px solid #ced4da;"></textarea>

                    <input type="submit" value="Gönder" style="cursor: pointer;background-color: rgb(215, 159, 37);font-size: 18px;letter-spacing: 1px;padding: 10px 30px; color: whitesmoke; border: 2px solid white; border-radius: 5px;margin-left: 10px; margin-top: 10px;">
                </div>


                <div id="adres" style=" padding: 30px;text-align: center;">

                    <h4 style="font-size: 30px; color: white;">Adres:</h4>
                    <p style="color: #000;font-size: 15px;letter-spacing: 1.5px;">Bilmem Artık Ne Mah.</p>
                    <p style="color: #000;font-size: 15px;letter-spacing: 1.5px;">Son Çıkmaz Caddesi</p>
                    <p style="color: #000;font-size: 15px;letter-spacing: 1.5px;">Şurdan Dön Sokak No:123</p>
                    <p style="color: #000;font-size: 15px;letter-spacing: 1.5px;">0212 999 25 25</p>
                    <p style="color: #000;font-size: 15px;letter-spacing: 1.5px;">Email : mükemmel@ravza.com</p>

                </div>

                <footer>
                    <div id="copyright" style=" color: white; font-size 20px;">2022 | Tüm Hakları Saklıdır </div>

                    <div id="sicialfooter">
                        
                    </div>
                </footer>    
            </div>  
            </form>
        </div>
    </div>
</body>
</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["email"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["email"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız başarılı bir şekilde gönderilmiştir.')</script>";
        
    }
    else
    {
        echo "<script>alert('Hata oluştu.')</script>";
    }
}


?>