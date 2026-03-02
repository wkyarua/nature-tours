<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/db.php'; ?>

<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Check if user exists
    $check = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $rs = mysqli_query($conn,$check);
    if(mysqli_num_rows($rs) > 0){
        $message = "<p style='color:red; text-align:center;'>Username or Email already exists!</p>";
    } else {
        // Insert user
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $message = "<p style='color:green; text-align:center;'>Registration successful! Please <a href='login.php'>Login</a>.</p>";
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<section class="container section-padding animate-up" style="max-width: 500px;">
    <h2 style="text-align: center; margin-bottom: 30px;">Create an Account</h2>
    <?php echo $message; ?>
    <form action="register.php" method="post" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Username</label>
            <input type="text" name="username" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Email</label>
            <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Password</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <button type="submit" class="btn" style="width: 100%;">Register Now</button>
        <p style="text-align: center; margin-top: 15px;">Already have an account? <a href="login.php" style="color: var(--primary-orange);">Login</a></p>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>