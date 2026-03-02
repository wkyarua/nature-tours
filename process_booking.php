<?php
// 1. Include the PHPMailer Library files we uploaded
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. Sanitize Inputs
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']); // Client Email
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $trip_type = mysqli_real_escape_string($conn, $_POST['trip_type']);
    $travel_date = mysqli_real_escape_string($conn, $_POST['travel_date']);
    $people = (int)$_POST['people'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // 3. Insert into Database
    $sql = "INSERT INTO bookings (full_name, email, phone, trip_type, travel_date, people, message) 
            VALUES ('$full_name', '$email', '$phone', '$trip_type', '$travel_date', '$people', '$message')";

    if ($conn->query($sql) === TRUE) {
        
        // 4. Configure Email Sending (SMTP)
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                            
            $mail->Host       = 'naturewise.tours';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'admin@naturewise.tours'; 
            $mail->Password   = 'Nature@tours';           
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
            $mail->Port       = 465;                                    

            // Recipients
            $mail->setFrom('admin@naturewise.tours', 'Naturewise Tours');
            
            // Send to Client
            $mail->addAddress($email, $full_name);     
            
            // Send a Copy to YOU (The Admin)
            $mail->addBCC('admin@naturewise.tours'); 

            // Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Booking Confirmation - Naturewise Tours';
            
            // HTML Email Body
            $mailBody = "
            <div style='font-family: Arial, sans-serif; color: #3E2723; max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 10px;'>
                <div style='text-align: center; border-bottom: 2px solid #FF8C00; padding-bottom: 20px;'>
                    <img src='https://naturewise.tours/images/logo.JPG' alt='Naturewise Logo' style='max-width: 150px;'>
                    <h2 style='color: #FF8C00;'>Booking Received</h2>
                </div>
                <div style='padding: 20px 0;'>
                    <p>Habari <strong>$full_name</strong>,</p>
                    <p>Thank you for choosing Naturewise Tours! We have received your booking request and our team is currently reviewing availability.</p>
                    
                    <h3 style='background-color: #FFF8E1; padding: 10px;'>Trip Details</h3>
                    <ul style='list-style: none; padding: 0;'>
                        <li><strong>Trip Package:</strong> $trip_type</li>
                        <li><strong>Travel Date:</strong> $travel_date</li>
                        <li><strong>Number of People:</strong> $people</li>
                        <li><strong>Phone Provided:</strong> $phone</li>
                    </ul>
                    
                    <p><strong>Your Message:</strong><br><em>$message</em></p>
                    
                    <hr style='border: 0; border-top: 1px solid #eee; margin: 20px 0;'>
                    <p>We will contact you shortly via email or phone to finalize the details.</p>
                </div>
                <div style='text-align: center; font-size: 0.9rem; color: #777;'>
                    <p>Naturewise Tours | Explore the Earth. Respect its Worth.</p>
                    <p><a href='https://naturewise.tours' style='color: #FF8C00;'>www.naturewise.tours</a></p>
                </div>
            </div>";

            $mail->Body = $mailBody;
            $mail->AltBody = "Thank you for booking $trip_type. We will contact you shortly.";

            $mail->send();

            // 5. Success Display
            require_once 'includes/header.php';
            ?>
            <section class="container section-padding animate-up" style="text-align: center; padding: 100px 20px;">
                <div style="background: white; padding: 50px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); max-width: 600px; margin: auto;">
                    <h1 style="color: green; font-size: 3rem;">✔ Sent!</h1>
                    <h2 style="color: var(--earth-brown); margin: 20px 0;">Booking Successful</h2>
                    <p>Thank you, <b><?php echo $full_name; ?></b>.</p>
                    <p>We have sent a confirmation to <b><?php echo $email; ?></b>.</p>
                    <br>
                    <a href="index.php" class="btn">Return Home</a>
                </div>
            </section>
            <?php
            require_once 'includes/footer.php';

        } catch (Exception $e) {
            // Email Failed but DB Saved
            require_once 'includes/header.php';
            echo "<div class='container section-padding'><h3 style='color:red'>Booking Saved, but Email Failed.</h3><p>Error: {$mail->ErrorInfo}</p></div>";
            require_once 'includes/footer.php';
        }

    } else {
        echo "Database Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    header("Location: booking.php");
    exit();
}
?>