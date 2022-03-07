<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Chatbox</title>
</head>
<body>
    <p>
        Hello <?php echo $_SESSION["nickname"] ?>
    </p>
    <br>
    <h1> Chat! </h1>

    <form action="./autoloader/messageautoloader.php" method="POST" autocomplete="off">
        <label for="send">Send!: </label>
        </select>
        <br>
        <label for="message">Send your message:</label>
        <br>
        <textarea id="message" name="message" rows="100" cols="100"></textarea>
        <button>Send!</button>
    </form>

</body>
</html>