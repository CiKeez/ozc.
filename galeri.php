<?php 
$pageTitle = "Özcan Haliloğlu | Galeri";
$pageDescription = "Özcan Haliloğlu - Sahne anlarından ve performanslardan kareler";
include 'header.php'; 
?>
    <style>
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }
        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            border: 3px solid var(--primary-gold);
            border-radius: 8px;
        }
        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: var(--primary-gold);
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

    <main class="container">
        <h2 class="main-headline">Performanslardan Kareler</h2>
        <div class="gallery-container">
            <?php 
            $descriptions = [
                12 => "Yetişkinlerle buluşma",
                13 => "Payitaht Abdülhamit",
                14 => "Hayal Postacısı",
                15 => "Çocuklarla buluşma",
                16 => "Hayal Postacısı",
                17 => "Final selamlaması",
                
                // Add descriptions for new posts here:
                21 => "Payitaht Abdülhamit dizisinden bir kare",
                22 => "Özcan Haliloğlu",
                23 => "Payitaht Abdülhamit dizisinden bir kare",
                24 => "Özcan Haliloğlu",
                25 => "Mehmed Fetihler Sultanı dizisinden bir kare",
                26 => "Mehmed Fetihler Sultanı dizisinden bir kare",
                27 => "Mehmed Fetihler Sultanı dizisinden bir kare",
                28 => "Mehmed Fetihler Sultanı dizisinden bir kare",
                29 => "Yüz Yüze dizisinden bir kare",
            ];

            for($i=29; $i>=1; $i--): 
                $desc = isset($descriptions[$i]) ? $descriptions[$i] : "Özcan Haliloğlu Performans";

                // Check for the correct image extension dynamically
                $ext = 'jpeg';
                if (file_exists(__DIR__ . "/images/galeri/gal-(" . $i . ").jpg")) {
                    $ext = 'jpg';
                } elseif (file_exists(__DIR__ . "/images/galeri/gal-(" . $i . ").png")) {
                    $ext = 'png';
                }
            ?>
            <article class="gallery-post">
                <img src="images/galeri/gal-(<?php echo $i; ?>).<?php echo $ext; ?>" alt="Galeri Görseli <?php echo $i; ?>" class="gallery-image">
                <div class="gallery-description">
                    <p><?php echo $desc; ?>.</p>
                </div>
            </article>
            <?php endfor; ?>
        </div>
    </main>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <span class="close-lightbox">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const closeBtn = document.querySelector('.close-lightbox');
            const galleryImages = document.querySelectorAll('.gallery-image');

            galleryImages.forEach(img => {
                img.style.cursor = 'pointer';
                img.addEventListener('click', () => {
                    lightbox.style.display = 'flex';
                    lightboxImg.src = img.src;
                });
            });

            const closeLightbox = () => {
                lightbox.style.display = 'none';
                lightboxImg.src = '';
            };

            closeBtn.addEventListener('click', closeLightbox);
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            // ESC key to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && lightbox.style.display === 'flex') {
                    closeLightbox();
                }
            });
        });
    </script>

<?php include 'footer.php'; ?>
