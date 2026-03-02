<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/db.php'; ?>

<section class="hero" style="background: linear-gradient(rgba(62,39,35,0.8), rgba(62,39,35,0.8)), url('images/image_0.png') center/cover; height: 50vh; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center;">
        <h1 style="color: var(--primary-yellow); font-size: 3rem;" class="animate-up">Our Safari Packages</h1>
        <p style="color: white; font-size: 1.2rem; margin-top: 10px;" class="animate-up">Crafted itineraries for unforgettable adventures</p>
    </div>
</section>

<section class="container section-padding">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
        
        <div class="package-card animate-up" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
            <div style="height: 250px; overflow: hidden;">
                <img src="images/image4.JPG" alt="3 Day Safari" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
            </div>
            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                <h3 style="color: var(--earth-brown);">3-Day Northern Circuit Express</h3>
                <div style="display: flex; justify-content: space-between; align-items: center; margin: 15px 0;">
                    <span style="font-size: 1.2rem; color: var(--primary-orange); font-weight: bold;">From $990 <small style="font-size: 0.8rem; color: #666;">/ pp</small></span>
                    <span style="background: var(--earth-brown); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem;">3 Days</span>
                </div>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">Experience the highlights of the northern circuit in a short time. Covers Tarangire National Park and the world-famous Ngorongoro Crater.</p>
                
                <h4 style="font-size: 1rem; margin-bottom: 10px;">Highlights:</h4>
                <ul style="list-style: none; display: grid; grid-template-columns: 1fr; gap: 5px; font-size: 0.9rem; margin-bottom: 20px;">
                    <li>✅ Tarangire (Elephants & Baobabs)</li>
                    <li>✅ Ngorongoro Crater (Big 5)</li>
                    <li>✅ Arusha Start & Finish</li>
                </ul>
                
                <div style="margin-top: auto;">
                    <a href="booking.php?trip=3-Day+Safari" class="btn" style="width: 100%; text-align: center;">Book Now</a>
                </div>
            </div>
        </div>

        <div class="package-card animate-up" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
            <div style="height: 250px; overflow: hidden;">
                <img src="images/image5.JPG" alt="4 Day Safari" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
            </div>
            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                <h3 style="color: var(--earth-brown);">4-Day Wildlife Essentials</h3>
                <div style="display: flex; justify-content: space-between; align-items: center; margin: 15px 0;">
                    <span style="font-size: 1.2rem; color: var(--primary-orange); font-weight: bold;">From $1,210 <small style="font-size: 0.8rem; color: #666;">/ pp</small></span>
                    <span style="background: var(--earth-brown); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem;">4 Days</span>
                </div>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">Perfect introduction to Tanzania's top destinations. Extended time in Ngorongoro Crater and Tarangire National Park.</p>
                
                <h4 style="font-size: 1rem; margin-bottom: 10px;">Highlights:</h4>
                <ul style="list-style: none; display: grid; grid-template-columns: 1fr; gap: 5px; font-size: 0.9rem; margin-bottom: 20px;">
                    <li>✅ Tarangire Game Drives</li>
                    <li>✅ Full Day Ngorongoro Crater</li>
                    <li>✅ Scenic Great Rift Valley</li>
                </ul>

                <div style="margin-top: auto;">
                    <a href="booking.php?trip=4-Day+Safari" class="btn" style="width: 100%; text-align: center;">Book Now</a>
                </div>
            </div>
        </div>

        <div class="package-card animate-up" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
            <div style="height: 250px; overflow: hidden;">
                <img src="images/image6.JPG" alt="6 Day Safari" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
            </div>
            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                <h3 style="color: var(--earth-brown);">6-Day Big Five Adventure</h3>
                <div style="display: flex; justify-content: space-between; align-items: center; margin: 15px 0;">
                    <span style="font-size: 1.2rem; color: var(--primary-orange); font-weight: bold;">From $2,146 <small style="font-size: 0.8rem; color: #666;">/ pp</small></span>
                    <span style="background: var(--earth-brown); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem;">6 Days</span>
                </div>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">The ultimate wildlife experience. Includes the legendary Serengeti National Park, Ngorongoro Crater, and Tarangire.</p>
                
                <h4 style="font-size: 1rem; margin-bottom: 10px;">Highlights:</h4>
                <ul style="list-style: none; display: grid; grid-template-columns: 1fr; gap: 5px; font-size: 0.9rem; margin-bottom: 20px;">
                    <li>✅ Serengeti (Great Migration)</li>
                    <li>✅ Ngorongoro Crater Floor</li>
                    <li>✅ Luxury Camp Accommodation</li>
                </ul>

                <div style="margin-top: auto;">
                    <a href="booking.php?trip=6-Day+Serengeti+Safari" class="btn" style="width: 100%; text-align: center;">Book Now</a>
                </div>
            </div>
        </div>

        <div class="package-card animate-up" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
            <div style="height: 250px; overflow: hidden;">
                <img src="images/image7.JPG" alt="7 Day Bush Beach" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
            </div>
            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                <h3 style="color: var(--earth-brown);">7-Day Safari & Zanzibar</h3>
                <div style="display: flex; justify-content: space-between; align-items: center; margin: 15px 0;">
                    <span style="font-size: 1.2rem; color: var(--primary-orange); font-weight: bold;">From $1,920 <small style="font-size: 0.8rem; color: #666;">/ pp</small></span>
                    <span style="background: var(--earth-brown); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem;">7 Days</span>
                </div>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">The perfect balance of adventure and relaxation. Combine Tarangire & Ngorongoro with 3 nights at a beachfront resort in Zanzibar.</p>
                
                <h4 style="font-size: 1rem; margin-bottom: 10px;">Highlights:</h4>
                <ul style="list-style: none; display: grid; grid-template-columns: 1fr; gap: 5px; font-size: 0.9rem; margin-bottom: 20px;">
                    <li>✅ Safari + Beach Combo</li>
                    <li>✅ Flight to Zanzibar Included</li>
                    <li>✅ Legendary Beach Resort Stay</li>
                </ul>

                <div style="margin-top: auto;">
                    <a href="booking.php?trip=7-Day+Bush+and+Beach" class="btn" style="width: 100%; text-align: center;">Book Now</a>
                </div>
            </div>
        </div>

        <div class="package-card animate-up" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; flex-direction: column;">
            <div style="height: 250px; overflow: hidden;">
                <img src="images/image8.JPG" alt="6 Day Zanzibar" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;">
            </div>
            <div style="padding: 25px; flex-grow: 1; display: flex; flex-direction: column;">
                <h3 style="color: var(--earth-brown);">6-Day Tropical Escape</h3>
                <div style="display: flex; justify-content: space-between; align-items: center; margin: 15px 0;">
                    <span style="font-size: 1.2rem; color: var(--primary-orange); font-weight: bold;">From $814 <small style="font-size: 0.8rem; color: #666;">/ pp</small></span>
                    <span style="background: var(--earth-brown); color: white; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem;">6 Days</span>
                </div>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">Pure relaxation at the Legendary Zanzibar Beach Resort. Enjoy white sands, turquoise waters, and optional Stone Town tours.</p>
                
                <h4 style="font-size: 1rem; margin-bottom: 10px;">Highlights:</h4>
                <ul style="list-style: none; display: grid; grid-template-columns: 1fr; gap: 5px; font-size: 0.9rem; margin-bottom: 20px;">
                    <li>✅ 5 Nights Luxury Beach Resort</li>
                    <li>✅ Half Board Meals</li>
                    <li>✅ Airport Transfers Included</li>
                </ul>

                <div style="margin-top: auto;">
                    <a href="booking.php?trip=6-Day+Zanzibar+Escape" class="btn" style="width: 100%; text-align: center;">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>