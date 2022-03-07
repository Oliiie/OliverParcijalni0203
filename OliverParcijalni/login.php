<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login here</title>
</head>
<body>
    <div class="topnav">
        <a class="active" href="">Login</a>
    </div>
    <form action="handlers/loginHandler.php" method="POST">
        <h1>Login</h1>

        <label for="username">Nickname</label>
        <input type="text" name="nickname" placeholder="Nickname" id="nickname">

        <button>Login</button>
    </form>
    <?php
        if(isset($_GET["message"])) {
            echo $_GET["message"];
        }
    ?>
</body>
</html>