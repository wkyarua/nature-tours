<?php require_once 'includes/header.php'; ?>

<section style="position: relative; height: 100vh; display: flex; align-items: center; justify-content: center; overflow: hidden;">
    
    <video id="heroVideo" autoplay loop muted playsinline poster="images/rembe.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; pointer-events: none;">
        <source src="videos/safari_hero.mp4" type="video/mp4">
    </video>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById("heroVideo");
            if (video.paused) {
                video.play().catch(function(error) {
                    console.log("Autoplay was prevented by the browser (Likely Low Power Mode).");
                });
            }
        });
    </script>

    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(62,39,35,0.3), rgba(0,0,0,0.6)); z-index: 1;"></div>
    
    <div class="container animate-up text-center" style="position: relative; z-index: 2;">
        <h2 style="color: var(--primary-yellow); letter-spacing: 3px; font-weight: 400; margin-bottom: 10px; text-transform: uppercase;">WELCOME TO NATUREWISE</h2>
        
        <h1 class="hero-title" style="color: #ffffff !important; text-shadow: 2px 4px 15px rgba(0,0,0,0.8) !important;">Your Greatest Adventure Is Waiting.</h1>
        
        <p style="color: white; font-size: 1.2rem; max-width: 700px; margin: 0 auto 40px; font-weight: 300; text-shadow: 1px 1px 5px rgba(0,0,0,0.8);">Tell us your requirements and we'll show you matching trips across the pristine landscapes of Tanzania and Kenya.</p>
        <div class="hero-buttons">
            <a href="safari.php" class="btn">Discover Safaris</a>
            <a href="booking.php" class="btn btn-outline">Start Here</a>
        </div>
    </div>
</section>

<section class="section-padding container">
    <div class="text-center animate-up" style="margin-bottom: 60px;">
        <span style="color: var(--primary-orange); font-family: 'Jost', sans-serif; font-weight: 600; letter-spacing: 2px;">YOUR JOURNEY BEGINS HERE</span>
        <h2 style="margin-top: 10px; color: var(--earth-brown);">Tailor-Made African Safaris</h2>
        <p style="max-width: 800px; margin: auto; color: var(--text-muted);">From the thundering hooves of the Great Migration in the Serengeti to the tranquil, turquoise waters of Zanzibar, our locally crafted itineraries ensure you experience the absolute best of East Africa.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
        
        <div class="g2a-card animate-up" onclick="window.location.href='safari.php'">
            <img src="images/maasaimara.jpeg" alt="Wildlife Safaris">
            <div class="g2a-overlay">
                <h3>Wildlife Safaris</h3>
                <p>Encounter the Big Five with our expert local guides in premium 4x4 vehicles.</p>
            </div>
        </div>

        <div class="g2a-card animate-up" onclick="window.location.href='climbing.php'" style="transition-delay: 0.1s;">
            <img src="images/kilimanjaro.jpeg" alt="Mountain Trekking">
            <div class="g2a-overlay">
                <h3>Mountain Trekking</h3>
                <p>Conquer Mount Kilimanjaro or Mount Meru with our highly trained alpine team.</p>
            </div>
        </div>

        <div class="g2a-card animate-up" onclick="window.location.href='destinations.php'" style="transition-delay: 0.2s;">
            <img src="images/zanzibar.jpeg" alt="Beach Holidays">
            <div class="g2a-overlay">
                <h3>Beach Escapes</h3>
                <p>Unwind on the pristine white-sand beaches of the Zanzibar Archipelago.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>