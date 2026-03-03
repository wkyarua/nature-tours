<?php require_once 'includes/header.php'; ?>

<?php $prefilled_trip = isset($_GET['trip']) ? htmlspecialchars($_GET['trip']) : ''; ?>

<section style="background: linear-gradient(rgba(62,39,35,0.7), rgba(62,39,35,0.8)), url('images/image_0.png') center/cover; height: 40vh; display: flex; align-items: center; justify-content: center;">
    <h1 style="color: var(--primary-yellow); font-size: 3rem; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);" class="animate-up">Book Your Adventure</h1>
</section>

<section class="container animate-up">
    <div class="booking-wrapper">
        <div style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2.2rem;">Start Your Journey</h2>
            <p style="color: var(--text-muted);">Fill in the details below and we will send you a confirmation email shortly.</p>
        </div>

        <form action="process_booking.php" method="POST">
            
            <div class="form-row">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" placeholder="e.g. John Doe" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="e.g. john@example.com" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" placeholder="+1 234 567 8900" required>
                </div>
                <div class="form-group">
                    <label>Number of People</label>
                    <input type="number" name="people" min="1" value="1" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Interested Trip</label>
                    <input type="text" name="trip_type" value="<?php echo $prefilled_trip; ?>" placeholder="e.g. 6-Day Serengeti Safari" required>
                </div>
                <div class="form-group">
                    <label>Preferred Date</label>
                    <input type="date" name="travel_date" required>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 30px;">
                <label>Additional Requests or Questions</label>
                <textarea name="message" rows="4" placeholder="Tell us about any dietary requirements, specific interests, or special occasions..."></textarea>
            </div>

            <button type="submit" class="btn" style="width: 100%; display: block; font-size: 1.1rem; padding: 18px;">CONFIRM BOOKING</button>
        </form>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>