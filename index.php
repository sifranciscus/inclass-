<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Greeting App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="left-panel">
            <span class="tag">Greeting App</span>
            <h1>Say Hello</h1>
            <p>Enter your name below and get a greeting on the next page.</p>
        </div>

        <div class="right-panel">
            <form action="process.php" method="POST" class="form-box">
                <h2>Welcome</h2>
                <p class="small-text">Type your name to continue</p>

                <input type="text" name="username" placeholder="Enter your name" required>

                <button type="submit">Continue</button>
            </form>
        </div>
    </div>
</body>
</html>