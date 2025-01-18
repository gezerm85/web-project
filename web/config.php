<?php
// Veritabanı Bağlantı Ayarları
$db_host = "localhost";            // Sunucu adresi
$db_user = "annelermaratonu_admin"; // Veritabanı kullanıcı adı
$db_pass = "ti}3Hc=UI8FQ";                // Kullanıcı için belirlediğiniz şifre
$db_name = "annelermaratonu_panel_db"; // Veritabanı adı

// Veritabanı bağlantısını başlat
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Bağlantı kontrolü
if (!$conn) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
?>
