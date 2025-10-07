<?php
$servername = "localhost";
$db_username = "user1";
$db_password = "user1";
$dbname = "users";

//create connection
$conn= new mysqli($servername,$db_username,$db_password,$dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


$message = "";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql="SELECT * from users where username=? and password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $message = "<p style='color:green;'>Đăng nhập thành công!</p>";
    } else {
        $message = "<p style='color:red;'>Sai username hoặc password!</p>";
    }
   

}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login.php</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .login-box {
            width: 300px;
            margin: 50px auto;
            padding: 15px;
            border-radius: 6px;
        }
        h2 { 
            margin-top: 0; 
        }
        label { 
            display: inline-block; 
            width: 80px; 
        }
        .in {
            width: 180px;
            padding: 4px;
        }
        .btn { 
            margin-top: 10px; 
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Form</h2>
        <form method="post" action="">
            <p>
                <label>Username:</label>
                <input class="in" type="text" name="username" required>
            </p>
            <p>
                <label>Password:</label>
                <input class="in" type="password" name="password" required>
            </p>
            <p class="btn">
                <input type="reset" value="Reset">
                <input type="submit" value="Login">
            </p>
        </form>
        <?php echo $message; ?>
    </div>
</body>
</html>