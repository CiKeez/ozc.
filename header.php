<?php
if (!isset($pageTitle)) {
    $pageTitle = "Özcan Haliloğlu | Tiyatro Sanatçısı";
}
if (!isset($pageDescription)) {
    $pageDescription = "Özcan Haliloğlu - Tiyatro Sanatçısı, Meddah ve Hayal Postacısı";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <link rel="stylesheet" href="style.css?v=1.3">
    <title><?php echo $pageTitle; ?></title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="main-bg-container">
        <div class="upheader"></div>
    <header>
        <a href="index.php" class="logo-link"><img class="logo" src="images/logo.png" alt="Özcan Haliloğlu Logo"></a>

        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger-label">
            <span class="hamburger-bars"></span>
        </label>

        <div class="header-content">
            <h1 class="headername">Özcan Haliloğlu</h1>
            <nav class="links">
                <a class="nav" href="index.php">Ana Sayfa</a>
                <a class="nav" href="hakkimda.php">Hakkımda</a>
                <a class="nav" href="oyunlar.php">Oyunlar/Takvim</a>
                <a class="nav" href="meddahlik.php">Meddahlık</a>
                <a class="nav" href="blog.php">Blog</a>
                <a class="nav" href="galeri.php">Galeri</a>
                <a class="nav" href="iletisim.php">İletişim</a>
            </nav>
        </div>
    </header>
    <div class="lowheader">
    </div>

