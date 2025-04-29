<!DOCTYPE html>
<html lang="en">
<?php
// include head section
include "components/head.php";
?>


<body>
    <?php include "components/header.php"; ?>

    <main>
        <!-- Banner Principal -->
        <section class="hero-banner">
            <img src="imageshero-banner.jpg" alt="ProGear Hub - Sports Apparel" 
                 onerror="this.onerror=null; this.src='https://media.about.nike.com/img/46f7a248-b2ff-4e16-b154-8d8be48a7f36/nike-247-apparel-collection-1.jpg?m=eyJlZGl0cyI6eyJqcGVnIjp7InF1YWxpdHkiOjEwMH0sIndlYnAiOnsicXVhbGl0eSI6MTAwfSwiZXh0cmFjdCI6eyJsZWZ0IjowLCJ0b3AiOjAsIndpZHRoIjoyNDAwLCJoZWlnaHQiOjE2MDB9LCJyZXNpemUiOnsid2lkdGgiOjE5MjB9fX0%3D&s=3796df94a615d143e3efcf29b985a22268772e3177c0f8a9e367e5093adb898f'">
        </section>

        <!-- Our Collections -->
        <section>
            <h2 class="section-title">OUR COLLECTIONS</h2>
            <div class="collections-container">
                <div class="collection-card">
                    <img src="imagesmens-wear.jpg" alt="Men's Wear Collection"
                         onerror="this.onerror=null; this.src='https://sweataesthetic.com/cdn/shop/files/DSC01936_2000x.jpg?v=1620336656'">
                    <div class="collection-label">Mens Wear</div>
                </div>
                <div class="collection-card">
                    <img src="images/womens-wear.jpg" alt="Women's Wear Collection"
                         onerror="this.onerror=null; this.src='https://www.yourcoffeebreak.co.uk/wp-content/uploads/E92A249B-2DEA-4F60-9597-231627E6A969-scaled.webp'">
                    <div class="collection-label">Womens Wear</div>
                </div>
                <div class="collection-card">
                    <img src="images/kids-wear.jpg" alt="Kids Wear Collection"
                         onerror="this.onerror=null; this.src='https://schoolactivesports.com.au/cdn/shop/products/37_17410_2000x2000.jpg?v=1633771048'">
                    <div class="collection-label">Kids Wear</div>
                </div>
            </div>
            <a href="#" class="see-more-btn">SEE MORE</a>
        </section>

        <!-- Bestsellers -->
        <section>
            <div class="bestsellers-banner">
                <img src="images/bestsellers-banner.jpg" alt="Bestselling Products"
                     onerror="this.onerror=null; this.src='https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/h_500,c_limit/4e474f58-c1e4-4461-8814-fad5958a12e4/nrc-guided-runs-short-runs.jpg'">
                <div class="bestsellers-title">BESTSELLERS</div>
            </div>
        </section>

        <!-- Seção What is Your Sport -->
        <section>
            <h2 class="section-title">WHAT IS YOUR SPORT?</h2>
            <div class="sports-categories">
                <div class="sport-card">
                    <img src="images/football.jpg" alt="Football"
                         onerror="this.onerror=null; this.src='https://ichef.bbci.co.uk/images/ic/480xn/p0g4wlb9.jpg.webp'">
                    <div class="sport-label">Football</div>
                </div>
                <div class="sport-card">
                    <img src="images/tennis.jpg" alt="Tennis"
                         onerror="this.onerror=null; this.src='https://www.mouratoglou.com/wp-content/uploads/2024/11/d3784c87-0df6-4fcc-a97c-bd1fca03e1a0-DSC4050-2-832x0-c-default.webp'">
                    <div class="sport-label">Tennis</div>
                </div>
                <div class="sport-card">
                    <img src="images/swimming.jpg" alt="Swimming"
                         onerror="this.onerror=null; this.src='https://st5.depositphotos.com/62628780/80277/i/450/depositphotos_802773846-stock-photo-swimming-workout-man-pool-water.jpg'">
                    <div class="sport-label">Swimming</div>
                </div>
            </div>
        </section>

        <!-- Seção Blog Resources -->
        <section>
            <h2 class="section-title">BLOG RESOURCES</h2>
            <div class="blog-resources">
                <div class="blog-card">
                    <img src="images/sports-tips.jpg" alt="Sports Tips & Training Guides"
                         onerror="this.onerror=null; this.src='https://philmaffetone.com/wp-content/uploads/2018/01/hit-high-intensity-training.jpg'">
                    <div class="blog-title">Sports Tips & Training Guides</div>
                </div>
                <div class="blog-card">
                    <img src="images/gear-maintenance.jpg" alt="Gear Maintenance"
                         onerror="this.onerror=null; this.src='https://img.freepik.com/premium-photo/pile-sports-equipment-including-tennis-racket-ball-basketball_1026943-749.jpg'">
                    <div class="blog-title">Gear Maintenance</div>
                </div>
            </div>
        </section>
    </main>

     <?php include "components/footer.php"; ?>
    
</body>

</html>