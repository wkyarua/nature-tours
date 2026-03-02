<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/db.php'; ?>

<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify password hash
        if (password_verify($password, $row['password'])) {
            // Password correct, start session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: index.php"); // Redirect to home
            exit();
        } else {
            $message = "<p style='color:red; text-align:center;'>Invalid password.</p>";
        }
    } else {
        $message = "<p style='color:red; text-align:center;'>User not found.</p>";
    }
}
?>

<section class="container section-padding animate-up" style="max-width: 500px;">
    <h2 style="text-align: center; margin-bottom: 30px;">Login</h2>
    <?php echo $message; ?>
    <form action="login.php" method="post" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Username</label>
            <input type="text" name="username" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold;">Password</label>
            <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
        </div>
        <button type="submit" class="btn" style="width: 100%;">Login</button>
        <p style="text-align: center; margin-top: 15px;">Don't have an account? <a href="register.php" style="color: var(--primary-orange);">Register</a></p>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>