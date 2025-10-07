<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Dang ky</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Thong tin da dang ky</h2>";

    echo "Username: " . $_POST['username'] . "<br>";
    echo "Password: " . $_POST['password'] . "<br>";
    echo "Gender: " . ($_POST['gender'] ?? "Chua chon") . "<br>";
    echo "Address: " . ($_POST['address'] ?? "Chua chon") . "<br>";

    echo "Programming Languages: ";
    if (!empty($_POST['language'])) {
        echo implode(", ", $_POST['language']);
    } else {
        echo "Khong chon";
    }
    echo "<br>";

    echo "Skill: " . ($_POST['skill'] ?? "Chua chon") . "<br>";
    echo "Note: " . $_POST['note'] . "<br>";
    echo "Marriage Status: " . (isset($_POST['married']) ? "Da ket hon" : "Chua ket hon") . "<br>";
    }
    else{
        echo '
        <h2>Form Dang ky</h2>
        <form method="post">
            <p>
                Username: <input type="text" name="username" required>
            </p>
            <p>
                Password: <input type="password" name="password" required>
            </p>
            <p>
                Gender:
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="Female">
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
                Enable Programming Language:
                <label for="php">PHP</label>
                <input type="checkbox" id="php" name="language[]" value="PHP">
                <label for="c#">C#</label>
                <input type="checkbox" id="c#" name="language[]" value="C#">
                <label for="java">Java</label>
                <input type="checkbox"  id="java" name="language[]" value="Java">
                <label for="c++">C++</label>
                <input type="checkbox" id="c++" name="language[]" value="C++">
            </p>
            <p>
                Skill:
                <label for="normal">Normal</label>
                <input type="radio" id="normal" name="skill" value="Normal">
                <label for="good">Good</label>
                <input type="radio" id="good" name="skill" value="Good">
                <label for="verygood">Very Good</label>
                <input type="radio" id="verygood" name="skill" value="Very Good">
                <label for="excellent">Excellent</label>
                <input type="radio" id="excellent" name="skill" value="Excellent"> Excellent
            </p>
            <p>
                Note: <br>
                <textarea name="note" rows="3" cols="40"></textarea>
            </p>
            <p>
                Marriage Status:
                <input type="checkbox" name="married" value="Yes">
            </p>
            <p>
                <input type="reset" value="Reset">
                <input type="submit" value="Register">
            </p>
        </form>
        ';
    }
    ?>
</body>
</html>
