<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["username"] ?? "");

    if ($name === "") {
        header("Location: index.php");
        exit();
    }

    header("Location: greeting.php?name=" . urlencode($name));
    exit();
}

header("Location: index.php");
exit();
?>
