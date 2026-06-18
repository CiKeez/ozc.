<?php 
$pageTitle = "Özcan Haliloğlu | Hakkımda";
$pageDescription = "Özcan Haliloğlu - Tiyatro sanatçısı, meddah ve Hayal Postacısı";
include 'header.php'; 
?>
    <style>
        .promo-post {
            max-width: 1000px !important;
            width: calc(100% - 60px) !important;
        }
        @media screen and (max-width: 796px) {
            .promo-post {
                width: calc(100% - 30px) !important;
            }
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            border-radius: 15px;
            border: 1px solid var(--primary-gold);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 15px var(--primary-gold);
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>

    <main class="container">
        <article class="content">
            <h2 class="section-title">Hakkımda</h2>
            <img class="foto" src="images/takimfoto.png" alt="Özcan Haliloğlu Fotoğrafı">
            <p class="text">Ben Özcan Haliloğlu. Tiyatro sanatçısı, meddah ve aktörüm.
​"Hayal Postacısı" olarak geleneksel anlatı sanatını modern sahneyle buluşturuyor; hem çocuklar hem de yetişkinler için kalplere dokunan hikâyeler sahneliyorum. Sahnede kelimelerin ve duyguların gücüne inanıyor, her oyunda izleyicimle zamansız bir köprü kurmayı hedefliyorum.
​Tiyatro sahnelerinin yanı sıra televizyon dizileri, reklam projeleri ve kamera önünde de profesyonel oyunculuk kariyerimi tutkuyla sürdürüyorum.</p>
        </article>

        <div class="gallery-container" style="margin-bottom: 20px; padding: 0;">
            <article class="gallery-post promo-post" style="margin: 0 auto; cursor: pointer; height: auto;">
                <img src="images/tanitim.png" alt="Özcan Haliloğlu Tanıtım" class="gallery-image" style="border-bottom: none; height: auto; width: 100%; object-fit: contain;">
            </article>
        </div>

        <div class="gallery-container" style="margin-bottom: 20px; padding: 0;">
            <div class="promo-post" style="margin: 0 auto;">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/8bzURES5K5U" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <section style="margin-top: 50px;">
            <h2 class="main-headline" style="margin-bottom: 20px;">Performanslardan Kareler</h2>
            <div class="gallery-container">
                <?php 
                $new_posts = [29, 28, 27, 26, 25, 24, 23, 22, 21];
                $descriptions = [
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

                foreach($new_posts as $i): 
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
                <?php endforeach; ?>
            </div>
        </section>

        <section class="single-preview-container">
            <div class="section-preview">
                <h3>İletişim</h3>
                <p>Projeler, iş birlikleri ve gösteri talepleriniz için benimle iletişime geçebilirsiniz.</p>
                <a href="iletisim.php" class="preview-link">Bana Ulaşın</a>
            </div>
        </section>
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
