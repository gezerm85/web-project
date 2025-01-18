<?php
// Veritabanı bağlantısını dahil edin
include 'config.php';

// Oturumu başlat
session_start();

// Eğer kullanıcı zaten giriş yapmışsa, doğrudan panel sayfasına yönlendir
if (isset($_SESSION['username'])) {
    header("Location: panel.php");
    exit;
}

// Giriş işlemini kontrol et
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formdan gelen verileri alın ve güvenli hale getirin
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Kullanıcıyı veritabanından sorgula
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Şifreyi doğrula
        if (password_verify($password, $user['password'])) {
            // Kullanıcı oturumunu başlat
            $_SESSION['username'] = $user['username'];
            echo "Giriş başarılı! Yönetim paneline yönlendiriliyorsunuz...";
            header("Refresh: 2; URL=panel.php"); // 2 saniye sonra panel sayfasına yönlendirme
            exit;
        } else {
            $error = "Hatalı şifre!";
        }
    } else {
        $error = "Kullanıcı bulunamadı!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body>
    <h1>Yönetim Paneli Giriş</h1>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form action="login.php" method="POST">
        <label for="username">Kullanıcı Adı:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Şifre:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
