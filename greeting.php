<?php
$name = trim($_GET["name"] ?? "");

if ($name === "") {
    header("Location: index.php");
    exit();
}

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-card">
        <div class="emoji">✨</div>
        <h1>Hello, <?php echo $safeName; ?>!</h1>
        <a href="index.php" class="back-btn">Go Back</a>
    </div>
</body>
</html>