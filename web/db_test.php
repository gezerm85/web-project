<?php
include 'config.php';

if ($conn) {
    echo "Veritabanı bağlantısı başarılı!";
} else {
    echo "Bağlantı hatası: " . mysqli_connect_error();
}
?>
