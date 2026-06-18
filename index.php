<?php 
require_once 'db_config.php'; 
$pageTitle = "Özcan Haliloğlu | Tiyatro Sanatçısı";
$pageDescription = "Özcan Haliloğlu - Tiyatro Sanatçısı, Meddah ve Hayal Postacısı";
include 'header.php'; 
?>
    <style>
        body {
            background-color: var(--dark-red) !important;
            background-image: none !important; /* Force remove from body */
        }

        .main-bg-container {
            background-image: url(images/background.png) !important;
            background-size: cover !important; /* Restore full coverage */
            background-position: top center !important;
            background-repeat: no-repeat !important;
            width: 100% !important;
            display: block !important;
            position: relative !important;
            background-color: transparent !important;
            border-bottom: 2px solid var(--primary-gold) !important; /* Decorative bottom border */
            box-shadow: 0 10px 20px rgba(0,0,0,0.5) !important; /* Bottom shadow for transition */
        }



        .comments-section {
            width: 95%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background-image: url(images/contentbg.jpg);
            background-size: cover;
            border-radius: 19px;
            box-shadow: 0 -10px 20px rgba(0,0,0,0.3), 0 0 30px var(--primary-gold); /* Add top shadow for depth */
            color: var(--dark-red);
            box-sizing: border-box;
            display: block; /* Changed from inline-block for better margin centering */
            text-align: left; /* Keep text aligned within the centered box */
            margin-top: 60px;
        }

        .comments-section .section-title {
            color: var(--dark-red);
            margin-bottom: 30px;
            border-bottom: 2px solid var(--primary-gold);
            text-align: center;
        }

        .comments-list {
            margin-bottom: 50px;
        }

        .comment-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 12px;
            border-left: 4px solid var(--dark-red);
            margin-bottom: 20px;
        }

        .comment-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding-bottom: 5px;
        }

        .comment-author {
            color: var(--dark-red);
            font-weight: bold;
            font-size: 1.1em;
        }

        .comment-date {
            font-size: 0.85em;
            color: #444;
        }

        .comment-text {
            line-height: 1.6;
            font-size: 1.1em;
            color: var(--dark-red);
        }

        .no-comments {
            text-align: center;
            font-style: italic;
            color: var(--dark-red);
            margin-bottom: 40px;
        }

        .comment-form-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid var(--primary-gold);
            margin-bottom: 50px;
        }

        .comment-form-container h3 {
            color: var(--dark-red);
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: var(--dark-red);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #444;
            background: #1a0202;
            color: var(--light-grey);
            font-family: inherit;
            box-sizing: border-box;
        }

        .form-group textarea {
            height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--dark-red);
            color: var(--primary-gold);
            padding: 12px 40px;
            border: 2px solid var(--primary-gold);
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, background 0.2s, box-shadow 0.2s;
            display: block; /* Required for margin: auto centering */
            margin: 20px auto 0; /* Centering */
            font-size: 1.1em;
        }

        .submit-btn:hover {
            background: #4a0707; /* Slightly lighter red */
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(227, 200, 116, 0.3);
        }

        .form-message {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-message.success {
            background: rgba(0, 128, 0, 0.2);
            border: 1px solid green;
            color: #1b5e20;
        }

        .form-message.error {
            background: rgba(255, 0, 0, 0.2);
            border: 1px solid red;
            color: #b71c1c;
        }

        .verification-label {
            font-weight: bold;
            color: var(--dark-red);
            margin-bottom: 5px;
            display: block;
        }

        .verification-hint {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
            font-style: italic;
        }

        @media screen and (max-width: 1040px) {
            .comments-section {
                width: 90%; /* Responsive width for mobile */
                margin: 20px auto; /* Centering with auto margins */
                padding: 20px;
            }
        }

        .g-recaptcha {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
    </style>

    <main class="container">
        <h2 class="main-headline">Geleneksel sanatlar modern tiyatroyla buluşuyor</h2>

        <div class="gallery-container" style="margin-bottom: 40px;">
            <article class="gallery-post" style="margin: 0 auto; cursor: pointer; height: auto;">
                <img src="images/tanitim.png" alt="Özcan Haliloğlu Tanıtım" class="gallery-image" style="border-bottom: none; height: auto; width: 100%; object-fit: contain;">
            </article>
        </div>

        <section class="biography-section">
            <article class="content">
                <h2 class="section-title">Hakkımda</h2>
                <img class="foto" src="images/takimfoto.png" alt="Özcan Haliloğlu Fotoğrafı">
                <p class="text">Ben Özcan Haliloğlu. Tiyatro sanatçısı, meddah ve aktörüm.
​"Hayal Postacısı" olarak geleneksel anlatı sanatını modern sahneyle buluşturuyor; hem çocuklar hem de yetişkinler için kalplere dokunan hikâyeler sahneliyorum. Sahnede kelimelerin ve duyguların gücüne inanıyor, her oyunda izleyicimle zamansız bir köprü kurmayı hedefliyorum.
​Tiyatro sahnelerinin yanı sıra televizyon dizileri, reklam projeleri ve kamera önünde de profesyonel oyunculuk kariyerimi tutkuyla sürdürüyorum.
                </p>
                <div style="clear: both; text-align: center; margin-top: 20px;">
                    <a href="hakkimda.php" class="read-more">Daha Fazla Bilgi</a>
                </div>
            </article>
        </section>


        <section class="preview-grid">

            <div class="section-preview">
                <h3>Oyunlar / Takvim</h3>
                <p>Sahnelediğim oyunları inceleyin ve gelecek performans tarihleri için etkinlik takvimine göz atın.</p>
                <a href="oyunlar.php" class="preview-link">Takvimi Gör</a>
            </div>

            <div class="section-preview">
                <h3>Meddahlık</h3>
                <p>3000 yıllık kadim bir gelenek: Asa ve mendilin büyülü dünyasında hikâye anlatıcılığının hikâyesi.</p>
                <a href="meddahlik.php" class="preview-link">İncele</a>
            </div>

            <div class="section-preview">
                <h3>Blog</h3>
                <p>Sanat, kültür ve tiyatro üzerine güncel yazılarımı, düşüncelerimi ve deneyimlerimi takip edin.</p>
                <a href="blog.php" class="preview-link">Yazıları Oku</a>
            </div>

            <div class="section-preview">
                <h3>Galeri</h3>
                <p>Sahne anlarından, hazırlık süreçlerinden ve performanslardan özel kareleri keşfedin.</p>
                <a href="galeri.php" class="preview-link">Fotoğraflara Bak</a>
            </div>

            <div class="section-preview">
                <h3>İletişim</h3>
                <p>Projeler, iş birlikleri ve gösteri talepleriniz için benimle iletişime geçebilirsiniz.</p>
                <a href="iletisim.php" class="preview-link">Bana Ulaşın</a>
            </div>
        </section>
    </main>
    </div> <!-- End of main-bg-container -->

    <section id="comments" class="comments-section">
            <h2 class="section-title">Yorumlar</h2>

        <div id="comment-form" class="comment-form-container">
            <h3>Yorum Yap</h3>
            <?php if (isset($_GET['success'])): ?>
                <p class="form-message success">Yorumunuz başarıyla gönderildi!</p>
            <?php elseif (isset($_GET['error'])): ?>
                <p class="form-message error">
                    <?php 
                    if ($_GET['error'] == 'captcha') echo "Güvenlik sorusu yanlış cevaplandı.";
                    else echo "Lütfen tüm alanları doldurun.";
                    ?>
                </p>
            <?php endif; ?>
            
            <form action="submit_comment.php" method="POST">
                <div class="form-group">
                    <label for="name">Adınız:</label>
                    <input type="text" id="name" name="name" required placeholder="Adınız Soyadınız">
                </div>
                <div class="form-group">
                    <label for="comment">Mesajınız:</label>
                    <textarea id="comment" name="comment" required placeholder="Düşüncelerinizi ya da sormak istediklerinizi buraya yazabilirsiniz..."></textarea>
                </div>
                
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>" data-theme="dark"></div>
                </div>
                
                <button type="submit" class="submit-btn">Gönder</button>
            </form>
        </div>
        
        <?php
        // Fetch approved comments
        try {
            $stmt = $pdo->query("SELECT name, comment, created_at FROM comments WHERE status = 'approved' ORDER BY created_at DESC");
            $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $comments = [];
        }
        
        if ($comments): ?>
            <div class="comments-list">
                <?php foreach ($comments as $c): ?>
                    <div class="comment-item">
                        <div class="comment-meta">
                            <span class="comment-author"><?php echo htmlspecialchars($c['name']); ?></span>
                            <span class="comment-date"><?php echo date('d.m.Y H:i', strtotime($c['created_at'])); ?></span>
                        </div>
                        <div class="comment-text">
                            <?php echo nl2br(htmlspecialchars($c['comment'])); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="no-comments">Henüz yorum yapılmamış. İlk yorumu siz yapın!</p>
        <?php endif; ?>
    </section>

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