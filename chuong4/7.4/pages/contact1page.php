<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Page</title>
    <style>
        fieldset {
            border: 1px solid red;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    echo '
        <h2>Form Lien he</h2>
        <form method="post">
            <p>
                Username: <input type="text" name="username" required>
            </p>
            <p>
                Gender:
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="Male">
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="Female">
            </p>
            <p>
                Address:
                <select name="address">
                    <option value="Ha Noi">Ha Noi</option>
                    <option value="TP. HCM">TP. HCM</option>
                    <option value="Hue">Hue</option>
                    <option value="Da Nang">Da Nang</option>
                </select>
            </p>
            <p>
                Note:<br>
                <textarea name="note" rows="3" cols="40"></textarea>
            </p>
            <p>
                <input type="reset" value="Reset">
                <input type="submit" value="Contact">
            </p>
        </form>
        ';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Xử lý và hiển thị thông tin
        echo '<fieldset>';
        echo "<h3>Thong tin lien he</h3>";
        echo "Username: " . $_POST['username'] . "<br>";
        echo "Gender: " . ($_POST['gender'] == "Male" ? "Nam" : "Nu") . "<br>";
        echo "Address: " . ($_POST['address'] ?? "Chua chon") . "<br>";
        echo "Note: " . $_POST['note'] . "<br>";
        echo '</fieldset>';
    }
    ?>
</body>
</html>
