<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <div class="container" style="display: flex;">
        <div class="left" style="width: 30%; border-right: 1px solid #ccc; padding: 10px; ">
            <?php include "listclass.php"; ?>
        </div>
        <div class="right" style=" width: 70%; padding: 10px;">
            <?php include "liststudentinclass.php"; ?>
        </div>
    </div>
</body>
</html>