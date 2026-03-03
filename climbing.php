<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/db.php'; ?>

<section style="background: linear-gradient(rgba(30,30,30,0.6), rgba(30,30,30,0.8)), url('images/image_1.png') center/cover; padding: 120px 0; text-align: center;">
    <h1 style="color: var(--primary-yellow);" class="animate-up">Mountain Trekking</h1>
    <p style="color: white; font-size: 1.2rem; max-width: 600px; margin: auto;" class="animate-up">Conquer the Giants of East Africa with our expert alpine guides.</p>
</section>

<section class="container section-padding animate-up">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        <?php
        $sql = "SELECT * FROM mountains";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="premium-card">
                    <div class="card-img-wrapper">
                        
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row["image_path"]); ?>" alt="<?php echo $row["name"]; ?>">
                        
                        <span style="position: absolute; top: 15px; left: 15px; background: var(--primary-orange); color: white; padding: 5px 12px; border-radius: 4px; font-size: 0.8rem; font-weight: bold; letter-spacing: 1px;"><?php echo strtoupper($row["country"]); ?></span>
                    </div>
                    
                    <div class="card-content">
                        <h3 style="font-size: 1.4rem; margin-bottom: 5px;"><?php echo $row["name"]; ?></h3>
                        <span style="color: var(--primary-orange); font-weight: 600; font-size: 0.95rem; margin-bottom: 15px; display: block; font-family: 'Jost', sans-serif;">Elevation: <?php echo $row["height"]; ?></span>
                        
                        <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6;"><?php echo $row["description"]; ?></p>
                        
                        <div style="margin-top: auto;">
                            <a href="booking.php?trip=<?php echo urlencode($row['name']); ?>" class="btn">Book This Climb</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p style='text-align: center; width: 100%;'>No trekking packages available currently.</p>";
        }
        ?>
    </div>
</section>

<section style="background-color: var(--earth-brown); color: var(--warm-beige); text-align: center; padding: 80px 20px;">
    <div class="container animate-up">
        <h2 style="color: var(--primary-yellow); margin-bottom: 15px;">Ready for the Challenge?</h2>
        <p style="max-width: 700px; margin: 0 auto 40px; font-size: 1.1rem; color: #ddd;">Whether you are a professional climber or a beginner hiker, we have the right guide and gear for you. Safety is our absolute priority.</p>
        <a href="booking.php" class="btn btn-outline" style="background: transparent; border: 2px solid var(--primary-yellow); color: var(--primary-yellow);">Start Your Journey</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>