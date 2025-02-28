<?php include('../includes/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Login/Signup</title>
</head>
<body>

    <div class="logsign">
        <div class="formbox log">
            <form action="" method="post" class="forms">
                <img src="../image/86a1c8c5-7906-4578-86fa-5c167f0b65ff.jpg" alt="Web Logo" class="logo">
                <h1 class="log">Login</h1>
                <div class="input-box">
                    <input type="text" id="user_username" name="user_username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="email" id="user_email" name="user_email" placeholder="Email" required>
                    <i class='bx bx-at'></i>
                </div>

                <div class="input-box">
                    <input type="password" id="user_password" name="user_password" placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword('user_password', this)">
                        <i class='bx bx-hide'></i>
                    </span>
                </div>

                <div class="forgot-link">
                    <a href="" class="forgot">Forgot Password?</a>
                </div>
                <button type="submit" name="user_login" class="btn1">Login</button>
            </form>
        </div>

        <div class="formbox reg">
            <form action="" method="post" class="forms">
                <img src="../image/86a1c8c5-7906-4578-86fa-5c167f0b65ff.jpg" alt="Web Logo" class="logo">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" id="user_username" name="user_username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="email" id="user_email" name="user_email" placeholder="Email" required>
                    <i class='bx bx-at'></i>
                </div>

                <div class="input-box">
                    <input type="password" id="user_password_reg" name="user_password" placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword('user_password_reg', this)">
                        <i class='bx bx-hide'></i>
                    </span>
                </div>

                <div class="input-box">
                    <input type="password" id="conf_user_password" name="conf_user_password" placeholder="Confirm Password" required>
                    <span class="toggle-password" onclick="togglePassword('conf_user_password', this)">
                        <i class='bx bx-hide'></i>
                    </span>
                </div>

                <button type="submit" name="user_register" class="btn1">Create Account</button>
            </form>
        </div>

        <div class="togbox">
            <div class="tog-pan tog-left">
                <h1>Welcome Back!</h1>
                <p>Don't have an account?</p>
                <button class="btn1 btnreg-btn">Register</button>
            </div>

            <div class="tog-pan tog-right">
                <h1>Hello, Welcome!</h1>
                <p>Already have an account?</p>
                <button class="btn1 btnlog-btn">LogIn</button>
            </div>
        </div>
    </div>

    <script src="../jscript/index.js"></script>

    <script>
    function togglePassword(inputId, eyeIcon) {
        let passwordField = document.getElementById(inputId);
        let icon = eyeIcon.querySelector('i');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove("bx-hide");
            icon.classList.add("bx-show");
        } else {
            passwordField.type = "password";
            icon.classList.remove("bx-show");
            icon.classList.add("bx-hide");
        }
    }
    </script>

</body>
</html>

<?php
if (isset($_POST['user_register'])) {
    include('../includes/connect.php'); 

    $user_username = mysqli_real_escape_string($con, $_POST['user_username']);
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_password = $_POST['user_password'];
    $conf_user_password = $_POST['conf_user_password'];

    if (strlen($user_password) < 8) {
        echo "<script>alert('Password must be at least 8 characters long!');</script>";
        exit();
    }

    
    if ($user_password !== $conf_user_password) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit();
    }

    
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    $select_query = "SELECT * FROM users WHERE username = '$user_username' OR email = '$user_email'";
    $result = mysqli_query($con, $select_query);

    if (!$result) {
        die("Error in query: " . mysqli_error($con));
    }

    $rows_count = mysqli_num_rows($result);

    if ($rows_count > 0) {
        echo "<script>alert('Username or Email already exists');</script>";
    
    }
    
    
    
    else {
        // Insert query with hashed password
        $insert_query = "INSERT INTO users (username, email, password_hash) VALUES ('$user_username', '$user_email', '$hashed_password')";
        $sql_execute = mysqli_query($con, $insert_query);

        if ($sql_execute) {
            echo "<script>alert('Registration successful!');</script>";
        } else {
            die("Error: " . mysqli_error($con));
        }
    }
}
?>

<?php


if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];

   
    $stmt = $con->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $user_username, $user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row_data = $result->fetch_assoc();

    if ($row_data) {
        if (password_verify($user_password, $row_data['password_hash'])) {
            echo "<script>alert('Login Successful!');</script>";
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials');</script>";
    }
}
?>
