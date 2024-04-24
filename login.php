<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../Mainpage/assets/css/form.css">
</head>
<body>
    <?php
    session_start();
    include 'connect.php'; // Assuming this script sets up the database connection.

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Use the connection already established in 'connect.php' if possible.
        $conn = new mysqli('localhost', 'root', '', 'mypage');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT users_id, username, password FROM teachusers WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Make sure the session variable name matches the column name
                $_SESSION['user_id'] = $user['users_id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php"); // Redirect to the main page after login
                exit();
            } else {
                echo "Invalid login credentials.";
            }
        } else {
            echo "Invalid login credentials.";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <form action="login.php" method="post">
        <div class="container">
            <h2>Login Form</h2>
            <!-- Use type="password" for the password input -->
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login" class="btn">Login</button>
            <p>Not a member yet? <a href="register.php">Register</a></p>
        </div>
    </form>
</body>
</html>
