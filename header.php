<?php
if (!isset($pageTitle)) {
    $pageTitle = "Özcan Haliloğlu | Tiyatro Sanatçısı";
}
if (!isset($pageDescription)) {
    $pageDescription = "Özcan Haliloğlu - Tiyatro Sanatçısı, Meddah ve Hayal Postacısı";
}
// Determine canonical URL for current page
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$canonicalBase = 'https://ozcanhaliloglu.com';
$currentPath = $_SERVER['REQUEST_URI'] ?? '/';
$canonicalUrl = $canonicalBase . strtok($currentPath, '?');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Open Graph (Facebook, WhatsApp previews) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="https://ozcanhaliloglu.com/images/logo.png">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:site_name" content="Özcan Haliloğlu">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Person",
          "@id": "https://ozcanhaliloglu.com/#person",
          "name": "Özcan Haliloğlu",
          "url": "https://ozcanhaliloglu.com/",
          "image": {
            "@type": "ImageObject",
            "url": "https://ozcanhaliloglu.com/images/logo.png",
            "width": 512,
            "height": 512
          },
          "jobTitle": "Tiyatro Sanatçısı, Meddah, Hayal Postacısı",
          "description": "Özcan Haliloğlu - Tiyatro Sanatçısı, Meddah ve Hayal Postacısı",
          "sameAs": [
            "https://www.instagram.com/ozcanhaliloglu?igsh=Y2U1aDh5czQxejNp",
            "https://www.facebook.com/share/1AXVUvSFZR/"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://ozcanhaliloglu.com/#website",
          "url": "https://ozcanhaliloglu.com/",
          "name": "Özcan Haliloğlu",
          "description": "Tiyatro Sanatçısı, Meddah ve Hayal Postacısı",
          "inLanguage": "tr-TR",
          "publisher": {"@id": "https://ozcanhaliloglu.com/#person"}
        },
        {
          "@type": "Organization",
          "@id": "https://ozcanhaliloglu.com/#organization",
          "name": "Özcan Haliloğlu",
          "url": "https://ozcanhaliloglu.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://ozcanhaliloglu.com/images/logo.png",
            "width": 512,
            "height": 512
          }
        }
      ]
    }
    </script>

    <link rel="stylesheet" href="style.css?v=1.3">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
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

