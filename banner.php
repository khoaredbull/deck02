<div class="section-banner">
    <div class="container">
        <div class="banner-wrapper">
            
            <?php for ($i=0; $i<3; $i++) : ?>
            <div>
                <div class="banner" <?php if ($i==1): ?>style="background-image:url('http://localhost/deck-2/assets/images/043.jpg');"<?php endif; ?>, 
                    <?php if ($i==2): ?>style="background-image:url('http://localhost/deck-2/assets/images/unnamed.jpg');"<?php endif; ?>>                                                                                                     
                    <div class="banner-item">
                        <a class="banner-item-link" href="#">FINANCE</a>
                        <h1 class="banner-item-title">THIS TIE BRAND IS BUCKING THE RETAIL APOCALYPSE WITH A MASSIVE STORE EXPANSION</h1>
                        <p class="banner-item-text">There is a lot of exciting stuff going on in the stars above us that makes astronomy so much fun. The truth is the universe is a constantly changing, moving.</p>
                    </div>
                    <div class="banner-info">
                        <a class="banner-info-icon" href="#"><img src="assets/images/Icon.png" alt="">275</a>
                        <a class="banner-info-icon" href="#"><img src="assets/images/Icon1.png" alt="">275</a>
                        <a class="banner-info-icon" href="#"><img src="assets/images/Icon2.png" alt="">12</a>
                    </div>                       
                </div>
            </div>
            <?php endfor; ?>
           
        </div>
    </div>
</div>