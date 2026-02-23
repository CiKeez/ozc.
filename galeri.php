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
            <?php for($i=1; $i<=20; $i++): 
                $desc = "Özcan Haliloğlu Performans";
                if($i == 13) $desc = "Payitaht Abdülhamit";
                if($i == 14 || $i == 16) $desc = "Hayal Postacısı";
                if($i == 15) $desc = "Çocuklarla buluşma";
                if($i == 12) $desc = "Yetişkinlerle buluşma";
                if($i == 17) $desc = "Final selamlaması";
            ?>
            <article class="gallery-post">
                <img src="images/galeri/gal-(<?php echo $i; ?>).jpeg" alt="Galeri Görseli <?php echo $i; ?>" class="gallery-image">
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
